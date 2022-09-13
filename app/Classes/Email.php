<?php

namespace App\Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email
{

    public static function enviar($file, $assunto, $destinatario, $admin = false, $attach = null, $attach_nome = "comprovante_de_compra.pdf")
    {
        $mail = new PHPMailer(true);

        try {

            // Mail server settings
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = "email-ssl.com.br"; // Endereço do servidor SMTP
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'contato@hyp8.com.br'; // SMTP username
            $mail->Password = 'Hyp8@passworD'; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;

            $mail->setFrom('contato@hyp8.com.br', 'Contato - ABS Brasil');
            if ($admin) {
                $mail->addAddress("contato@hyp8.com.br"); // Add a recipient, Name is optional
            } else {
                $mail->addAddress($destinatario); // Add a recipient, Name is optional
            }
            $mail->addReplyTo('contato@hyp8.com.br', 'Contato - ABS Brasil');
            // print_r($_FILES['file']); exit;

            if ($attach) {
                $mail->AddAttachment($attach, $attach_nome);
            }

            $mail->isHTML(true); // Set email format to HTML

            // $file = file_get_contents('site/emails/nova_senha.html');
            // $file = str_replace("{{senha}}", Str::random(6), $file);
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';

            $mail->Subject = $assunto;
            $mail->Body    = $file;

            // $mail->AltBody = plain text version of your message;

            if (!$mail->send()) {
                // die();
                return false;
            } else {
                // die();
                return true;
            }
        } catch (Exception $e) {
            // die();
            return false;
        }
    }
}
