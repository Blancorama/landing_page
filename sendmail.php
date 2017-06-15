<?php
    require_once('PHPMailer/PHPMailerAutoload.php');

    if(isset($_POST['mail'])) {
        if(!isset($_POST['name']) || !isset($_POST['mail'])) {
            echo "<b>Error y el formulario no ha sido enviado. </b><br />";
            echo "Por favor, regreses y verifique sus datos<br />";
            die();
        }

        $email_to = "subscripciones@blancorama.com";
        $email_cc = "mateo@paybook.com";

        $email_subject = "Correo desde Langing Page";

        $email_message = "Detalles del formulario de contacto:\n\n";
        $email_message .= "Nombre: " . $_POST['name'] . "\n";
        $email_message .= "E-mail: " . $_POST['mail'] . "\n";

        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = false; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        //$mail->IsHTML(true);
        $mail->Username = "email@mail.com";
        $mail->Password = "password";
        $mail->SetFrom("email@mail.com");
        $mail->Subject = $email_subject;
        $mail->Body = $email_message;
        $mail->AddAddress($email_to, 'Jessica T.');
        $mail->AddCC($email_cc, 'Mateo');

        if(!$mail->Send()) {
            //echo "Mailer Error: " . $mail->ErrorInfo;
            echo "Su solicitud no ha sido registrada";
        } else {
            echo "Su solicitud ha sido registrada";
        }
    }
?>

