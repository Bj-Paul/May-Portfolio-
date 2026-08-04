<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: ../index.php");
    exit();
}

// Get form data
$name    = htmlspecialchars(trim($_POST["name"]));
$email   = htmlspecialchars(trim($_POST["email"]));
$subject = htmlspecialchars(trim($_POST["subject"]));
$message = htmlspecialchars(trim($_POST["message"]));

$mail = new PHPMailer(true);

try {

    // ==========================
    // SMTP SETTINGS
    // ==========================
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;

    // Your Gmail
    $mail->Username   = 'bjpaulcabunilas15@gmail.com';

    // Your Gmail APP PASSWORD
    $mail->Password   = 'mcvooymtvjvaaloc';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // ==========================
    // EMAIL SETTINGS
    // ==========================

    // Always send from your Gmail
    $mail->setFrom('bjpaulcabunilas15@gmail.com', 'Portfolio Contact Form');

    // Reply goes to the visitor
    $mail->addReplyTo($email, $name);

    // Receiver
    $mail->addAddress('bjpaulcabunilas15@gmail.com', 'BJ Paul Cabunilas');

    $mail->isHTML(true);

    $mail->Subject = "New Contact Form Message: " . $subject;

    $mail->Body = "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body{
                font-family:Arial,sans-serif;
                background:#f4f4f4;
                padding:20px;
            }

            .container{
                background:#ffffff;
                max-width:650px;
                margin:auto;
                border-radius:10px;
                overflow:hidden;
                border:1px solid #ddd;
            }

            .header{
                background:#2563eb;
                color:#fff;
                padding:20px;
                text-align:center;
            }

            .content{
                padding:25px;
            }

            table{
                width:100%;
                border-collapse:collapse;
            }

            td{
                padding:12px;
                border-bottom:1px solid #eee;
            }

            .label{
                font-weight:bold;
                width:140px;
            }

            .footer{
                background:#f8f8f8;
                text-align:center;
                padding:15px;
                color:#777;
                font-size:14px;
            }
        </style>
    </head>

    <body>

        <div class='container'>

            <div class='header'>
                <h2>New Portfolio Contact Message</h2>
            </div>

            <div class='content'>

                <table>

                    <tr>
                        <td class='label'>Full Name</td>
                        <td>{$name}</td>
                    </tr>

                    <tr>
                        <td class='label'>Email</td>
                        <td>{$email}</td>
                    </tr>

                    <tr>
                        <td class='label'>Subject</td>
                        <td>{$subject}</td>
                    </tr>

                    <tr>
                        <td class='label'>Message</td>
                        <td>{$message}</td>
                    </tr>

                </table>

            </div>

            <div class='footer'>
                This message was sent from your Portfolio Contact Form.
            </div>

        </div>

    </body>
    </html>
    ";

    $mail->AltBody =
"New Portfolio Contact Message

Full Name: $name

Email: $email

Subject: $subject

Message:

$message";

    $mail->send();

    echo "
    <script>
        alert('✅ Your message has been sent successfully!');
        window.location='../index.php#contact';
    </script>
    ";

} catch (Exception $e) {

    echo "
    <script>
        alert('❌ Message could not be sent.\\n\\nError: {$mail->ErrorInfo}');
        window.location='../index.php#contact';
    </script>
    ";

}