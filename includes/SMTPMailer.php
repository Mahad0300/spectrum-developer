<?php
/**
 * Spectrum Developers - Standalone SMTP Mailer Class
 * Zero-dependency pure PHP SMTP Socket Client with SSL/TLS encryption.
 */

class SpectrumSMTPMailer
{
    private $host;
    private $port;
    private $secure;
    private $username;
    private $password;
    private $timeout;
    private $socket = null;
    private $debugLogs = [];

    public function __construct(array $config)
    {
        $this->host     = $config['smtp_host'] ?? 'smtp.gmail.com';
        $this->port     = (int)($config['smtp_port'] ?? 465);
        $this->secure   = strtolower($config['smtp_secure'] ?? 'ssl');
        $this->username = trim($config['smtp_user'] ?? '');
        $this->password = str_replace(' ', '', $config['smtp_pass'] ?? '');
        $this->timeout  = (int)($config['smtp_timeout'] ?? 20);
    }

    /**
     * Send an HTML Email via SMTP
     */
    public function send(string $toEmail, string $toName, string $subject, string $htmlBody, string $fromEmail, string $fromName, string $replyTo = ''): array
    {
        try {
            $this->connect();
            $this->authenticate();

            // Set Envelope Sender & Recipient
            $this->sendCommand("MAIL FROM: <{$fromEmail}>", 250);
            $this->sendCommand("RCPT TO: <{$toEmail}>", [250, 251]);

            // Start DATA command
            $this->sendCommand("DATA", 354);

            // Construct Headers
            $boundary = md5(uniqid(time()));
            $date = date('r');
            $msgId = "<" . time() . "." . uniqid() . "@" . gethostname() . ">";

            $headers = [];
            $headers[] = "Date: {$date}";
            $headers[] = "To: =?UTF-8?B?" . base64_encode($toName) . "?= <{$toEmail}>";
            $headers[] = "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <{$fromEmail}>";
            if (!empty($replyTo)) {
                $headers[] = "Reply-To: <{$replyTo}>";
            }
            $headers[] = "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=";
            $headers[] = "Message-ID: {$msgId}";
            $headers[] = "X-Mailer: SpectrumDevelopers-Mailer/2.0";
            $headers[] = "MIME-Version: 1.0";
            $headers[] = "Content-Type: text/html; charset=UTF-8";
            $headers[] = "Content-Transfer-Encoding: 8bit";

            $messageData = implode("\r\n", $headers) . "\r\n\r\n" . $htmlBody . "\r\n.";
            $this->sendCommand($messageData, 250);

            // Quit Session
            $this->sendCommand("QUIT", 221);
            $this->close();

            return [
                'success' => true,
                'message' => 'Email sent successfully.'
            ];
        } catch (Exception $e) {
            $this->close();
            return [
                'success' => false,
                'message' => $e->getMessage(),
                'logs'    => $this->debugLogs
            ];
        }
    }

    /**
     * Establish secure socket connection to SMTP server
     */
    private function connect(): void
    {
        $context = stream_context_create([
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ]);

        $hostPrefix = ($this->secure === 'ssl') ? 'ssl://' : '';
        $connectionString = $hostPrefix . $this->host . ':' . $this->port;

        $errno = 0;
        $errstr = '';
        $this->socket = @stream_socket_client(
            $connectionString,
            $errno,
            $errstr,
            $this->timeout,
            STREAM_CLIENT_CONNECT,
            $context
        );

        if (!$this->socket) {
            throw new Exception("Could not connect to SMTP server ({$connectionString}): [{$errno}] {$errstr}");
        }

        stream_set_timeout($this->socket, $this->timeout);

        // Read initial connection greeting (Code 220)
        $this->readResponse(220);

        // EHLO Handshake
        $clientName = !empty($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost';
        $this->sendCommand("EHLO {$clientName}", 250);

        // Handle STARTTLS for Port 587
        if ($this->secure === 'tls') {
            $this->sendCommand("STARTTLS", 220);
            if (!stream_socket_enable_crypto($this->socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                throw new Exception("STARTTLS encryption negotiation failed.");
            }
            $this->sendCommand("EHLO {$clientName}", 250);
        }
    }

    /**
     * Authenticate with SMTP credentials using AUTH LOGIN
     */
    private function authenticate(): void
    {
        if (empty($this->username) || empty($this->password)) {
            return;
        }

        $this->sendCommand("AUTH LOGIN", 334);
        $this->sendCommand(base64_encode($this->username), 334);
        $this->sendCommand(base64_encode($this->password), 235);
    }

    /**
     * Send SMTP command and verify response code
     */
    private function sendCommand(string $command, $expectedCodes): string
    {
        $this->debugLogs[] = "CLIENT: " . ($this->isSensitive($command) ? '***HIDDEN***' : $command);
        fwrite($this->socket, $command . "\r\n");
        return $this->readResponse($expectedCodes);
    }

    /**
     * Read multi-line or single-line response from socket
     */
    private function readResponse($expectedCodes): string
    {
        if (!is_array($expectedCodes)) {
            $expectedCodes = [$expectedCodes];
        }

        $response = '';
        while (!feof($this->socket)) {
            $line = fgets($this->socket, 512);
            if ($line === false) {
                break;
            }
            $response .= $line;
            // SMTP lines with space as 4th character indicate end of multi-line response (e.g., "250 OK")
            if (isset($line[3]) && $line[3] === ' ') {
                break;
            }
        }

        $this->debugLogs[] = "SERVER: " . trim($response);

        $code = (int)substr($response, 0, 3);
        if (!in_array($code, $expectedCodes, true)) {
            throw new Exception("SMTP Error [Code {$code}]: " . trim($response));
        }

        return $response;
    }

    private function isSensitive(string $command): bool
    {
        return preg_match('/^(AUTH|PASS|[\w\+\/\=]{20,})/i', $command);
    }

    private function close(): void
    {
        if ($this->socket) {
            @fclose($this->socket);
            $this->socket = null;
        }
    }
}
