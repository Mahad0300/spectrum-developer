<?php
/**
 * Spectrum Developers - SMTP Configuration File
 * Contains SMTP server credentials and recipient routing settings.
 */

// Prevent direct script access
if (!defined('SPECTRUM_ACCESS') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    header("Location: ../index.php");
    exit();
}

return [
    // SMTP Server Settings (Hostinger Webmail SMTP)
    'smtp_host'       => 'smtp.hostinger.com',
    'smtp_port'       => 465,                     // 465 for SSL, 587 for TLS
    'smtp_secure'     => 'ssl',                   // 'ssl' or 'tls'
    'smtp_auth'       => true,
    'smtp_user'       => 'syedmahadbukhari8@gmail.com',
    'smtp_pass'       => '******',       // Gmail App Password (without spaces)
    'smtp_timeout'    => 20,

    // Sender Details (Branded as Spectrum Developers)
    'from_email'      => 'syedmahadbukhari8@gmail.com',
    'from_name'       => 'Spectrum Developers',

    // Recipient Details (Where consultation requests are sent)
    'to_email'        => 'syedmahadbukhari8@gmail.com',
    'to_name'         => 'Spectrum Developers Sales Team',

    // Email Subject
    'email_subject'   => 'Spectrum Developers'
];
