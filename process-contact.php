<?php
/**
 * Spectrum Developers - Contact Form Backend & SMTP Email Processor
 */

// Set JSON response header
header('Content-Type: application/json; charset=UTF-8');

// Allow only POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Invalid request method. Only POST is allowed.'
    ]);
    exit();
}

define('SPECTRUM_ACCESS', true);

// Load SMTP Configuration and Mailer Class
$config = require_once __DIR__ . '/includes/smtp_config.php';
require_once __DIR__ . '/includes/SMTPMailer.php';

// Helper function to sanitize user inputs
function sanitize_input($data) {
    if (empty($data)) return '';
    return htmlspecialchars(trim((string)$data), ENT_QUOTES, 'UTF-8');
}

// 1. Retrieve & Sanitize Inputs
$fullName      = sanitize_input($_POST['fullName'] ?? '');
$email         = sanitize_input($_POST['email'] ?? '');
$phone         = sanitize_input($_POST['phone'] ?? '');
$preferredTime = sanitize_input($_POST['preferredTime'] ?? '');
$areaInterest  = sanitize_input($_POST['areaInterest'] ?? '');
$assistMessage = sanitize_input($_POST['assistMessage'] ?? '');

// 2. Validate Required Fields
if (empty($fullName)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your Full Name.']);
    exit();
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Please provide a valid Email Address.']);
    exit();
}

if (empty($phone)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your Phone Number.']);
    exit();
}

// Format Preferred Date & Time nicely if provided
$formattedDateTime = 'Not Specified';
if (!empty($preferredTime)) {
    $timestamp = strtotime($preferredTime);
    if ($timestamp !== false) {
        $formattedDateTime = date('l, d F Y \a\t h:i A', $timestamp);
    } else {
        $formattedDateTime = $preferredTime;
    }
}

$areaInterestText = !empty($areaInterest) ? $areaInterest : 'General Inquiry';
$clientMessageText = !empty($assistMessage) ? nl2br($assistMessage) : '<em>No additional message provided.</em>';
$submittedAt = date('d M Y, h:i A (T)');
$clientIp = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$referer = $_SERVER['HTTP_REFERER'] ?? 'Spectrum Developers Website';

// 3. Construct Luxury Gold / Black HTML Email Template
$subject = $config['email_subject'] ?? 'Spectrum Developers';

$htmlBody = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; background-color: #06080A; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #FFFFFF; -webkit-font-smoothing: antialiased;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #06080A; padding: 15px 5px;">
        <tr>
            <td align="center">
                <!-- Main Container Card -->
                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="max-width: 600px; background-color: #0E1217; border: 1px solid #C5A059; box-shadow: 0 10px 35px rgba(0,0,0,0.8); border-radius: 4px; overflow: hidden;">
                    
                    <!-- Header Banner -->
                    <tr>
                        <td align="center" style="padding: 24px 15px 18px; background: linear-gradient(180deg, #161B22 0%, #0E1217 100%); border-bottom: 2px solid #C5A059;">
                            <h1 style="margin: 0; font-family: Georgia, 'Times New Roman', serif; font-size: 23px; letter-spacing: 2.5px; color: #C5A059; text-transform: uppercase; font-weight: 600;">SPECTRUM DEVELOPERS</h1>
                            <p style="margin: 5px 0 0; font-size: 10.5px; letter-spacing: 2px; color: #DFBF77; text-transform: uppercase;">Beyond Land. We Create Legacy.</p>
                        </td>
                    </tr>

                    <!-- Client Details Table -->
                    <tr>
                        <td style="padding: 16px 15px 18px;">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                
                                <!-- Full Name -->
                                <tr>
                                    <td width="34%" style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 11px; font-weight: 600; color: #C5A059; letter-spacing: 0.8px; text-transform: uppercase; vertical-align: middle;">
                                        FULL NAME:
                                    </td>
                                    <td width="66%" style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 14px; font-weight: 600; color: #FFFFFF; vertical-align: middle;">
                                        {$fullName}
                                    </td>
                                </tr>

                                <!-- Email -->
                                <tr>
                                    <td style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 11px; font-weight: 600; color: #C5A059; letter-spacing: 0.8px; text-transform: uppercase; vertical-align: middle;">
                                        EMAIL:
                                    </td>
                                    <td style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 13.5px; color: #FFFFFF; vertical-align: middle;">
                                        <a href="mailto:{$email}" style="color: #DFBF77; text-decoration: none; font-weight: 500;">{$email}</a>
                                    </td>
                                </tr>

                                <!-- Phone -->
                                <tr>
                                    <td style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 11px; font-weight: 600; color: #C5A059; letter-spacing: 0.8px; text-transform: uppercase; vertical-align: middle;">
                                        PHONE:
                                    </td>
                                    <td style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 13.5px; font-weight: 600; color: #FFFFFF; vertical-align: middle;">
                                        <a href="tel:{$phone}" style="color: #DFBF77; text-decoration: none;">{$phone}</a>
                                    </td>
                                </tr>

                                <!-- Preferred of Time -->
                                <tr>
                                    <td style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 11px; font-weight: 600; color: #C5A059; letter-spacing: 0.8px; text-transform: uppercase; vertical-align: middle;">
                                        PREFERRED OF TIME:
                                    </td>
                                    <td style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 13.5px; color: #DFBF77; font-weight: 600; vertical-align: middle;">
                                        {$formattedDateTime}
                                    </td>
                                </tr>

                                <!-- Area of Interest -->
                                <tr>
                                    <td style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 11px; font-weight: 600; color: #C5A059; letter-spacing: 0.8px; text-transform: uppercase; vertical-align: middle;">
                                        AREA OF INTEREST:
                                    </td>
                                    <td style="padding: 10px 6px; border-bottom: 1px solid rgba(197, 160, 89, 0.2); font-size: 13.5px; color: #FFFFFF; vertical-align: middle;">
                                        {$areaInterestText}
                                    </td>
                                </tr>

                                <!-- Message -->
                                <tr>
                                    <td colspan="2" style="padding: 16px 6px 6px;">
                                        <span style="display: block; font-size: 11px; font-weight: 600; color: #C5A059; letter-spacing: 0.8px; text-transform: uppercase; margin-bottom: 8px;">
                                            MESSAGE:
                                        </span>
                                        <div style="background-color: #07090C; border: 1px solid rgba(197, 160, 89, 0.3); border-radius: 3px; padding: 12px 14px; font-size: 13px; line-height: 1.55; color: #E2E8F0;">
                                            {$clientMessageText}
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <!-- Direct Action Buttons -->
                    <tr>
                        <td align="center" style="padding: 0 15px 22px;">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="background-color: #C5A059; border-radius: 3px; padding: 12px 20px;">
                                        <a href="mailto:{$email}?subject=Re:%20Private%20Consultation%20-%20Spectrum%20Developers" style="color: #000000; text-decoration: none; font-size: 12.5px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; display: block;">
                                            REPLY DIRECTLY TO CLIENT
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
HTML;

// 4. Send Email via Spectrum SMTP Mailer
$mailer = new SpectrumSMTPMailer($config);

$result = $mailer->send(
    $config['to_email'],
    $config['to_name'],
    $subject,
    $htmlBody,
    $config['from_email'],
    $config['from_name'],
    $email // Set Reply-To to the client's email
);

if ($result['success']) {
    echo json_encode([
        'status'  => 'success',
        'message' => 'Thank you! Your consultation request has been successfully submitted. Our dedicated team will connect with you at your preferred time.'
    ]);
} else {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Could not send your request at this moment. Please call us directly at +92 311 1123115.',
        'debug'   => $result['message'] ?? 'SMTP Error'
    ]);
}
