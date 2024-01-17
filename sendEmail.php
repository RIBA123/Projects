<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pance.ribarski2@gmail.com';
        $mail->Password   = 'uvbr jxjz wtdc atah';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('pane.ribarski1@icloud.com', $_POST['name'] . ' ' . $_POST['lastName']); 

        $mail->isHTML(true);

       
        $body = "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <style>
                    body {
                        font-family: 'Arial', sans-serif;
                        line-height: 1.6;
                        color: #333;
                        margin: 0;
                        padding: 20px;
                        background-color: #f4f4f4;
                    }
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        background-color: #fff;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }
                    h2 {
                        color: #007bff;
                        font-size: 20px;
                    }
                    strong {
                        color: #555;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>Message from {$_POST['name']} {$_POST['lastName']}</h2>
                    <p><strong>Email:</strong> {$_POST['email']}</p>
                    <p><strong>Phone Number:</strong> {$_POST['phoneNumber']}</p>
                    <p><strong>Location:</strong> {$_POST['location']}</p>
                    <p><strong>Message:</strong> {$_POST['msg']}</p>
                </div>
            </body>
            </html>
        ";

        $mail->Body = $body;

        $mail->send();
    } catch (Exception $e) {
        
    }
}
?>
