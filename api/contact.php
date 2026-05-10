<?php
$base      = (str_contains($_SERVER['HTTP_HOST'] ?? '', 'localhost')) ? '/portfolio' : '';
$cookiePath = $base . '/';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: {$base}/");
    exit;
}

require_once dirname(__DIR__) . '/mail_config.php';
require_once dirname(__DIR__) . '/lib/Exception.php';
require_once dirname(__DIR__) . '/lib/PHPMailer.php';
require_once dirname(__DIR__) . '/lib/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function clean(string $v): string {
    return htmlspecialchars(strip_tags(trim($v)), ENT_QUOTES, 'UTF-8');
}

$name    = clean($_POST['name']    ?? '');
$email   = clean($_POST['email']   ?? '');
$subject = clean($_POST['subject'] ?? '');
$message = clean($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
    setcookie('flash', 'err', time() + 60, $cookiePath);
    header("Location: {$base}/#contact");
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setcookie('flash', 'err', time() + 60, $cookiePath);
    header("Location: {$base}/#contact");
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = MAIL_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = MAIL_USER;
    $mail->Password   = MAIL_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = MAIL_PORT;

    $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(false);
    $subLine  = $subject ? "Portfolio: {$subject}" : "Portfolio message from {$name}";
    $mail->Subject = $subLine;
    $mail->Body    = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}";

    $mail->send();
    setcookie('flash', 'ok', time() + 60, $cookiePath);
    header("Location: {$base}/#contact");
} catch (Exception $e) {
    error_log('Mailer error: ' . $mail->ErrorInfo);
    setcookie('flash', 'err', time() + 60, $cookiePath);
    header("Location: {$base}/#contact");
}
exit;
