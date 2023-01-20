<?php
date_default_timezone_set('America/Sao_Paulo');

require_once('PHPMailer/PHPMailer.php');
require_once('PHPMailer/SMTP.php');
require_once('PHPMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não informado';
$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : 'Não informado';
$body = isset($_POST['body']) ? $_POST['body'] : 'Não informado';

$mail = new PHPMailer();

if($email && $body){
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPDebug  = 1; 
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '1anodsintegral@gmail.com';
    $mail->Password = '2anoetimDS';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';

    $mail->setFrom('1anodsintegral@gmail.com');
    $mail->addAddress('1anodsintegral@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "Nome: {$nome}<br>
                   Email: {$email}<br>
                   Mensagem: {$body}";
    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        $status = "failed";
        $response = 'Email nao enviado :( <br>' . $mail->ErrorInfo;
    }
    exit(json_encode(array("status"=> $status, "response" => $response)));
}else{
    echo "Email nao enviado: Informar email e a mensagem";
}



/*
    $smtp_debug = true ; 
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'robrobdograu123@gmail.com';
    $mail->Password = '!minhamot@minhasregras!@123';
    $mail->Port = 587;
    $mail->SMTPSecure = "ss1";

    $mail->isHTML(true);
    $mail->setFrom($email, $nome);
    $mail->addAddress("robrobdograu123@gmail.com");
    $mail->Assunto=("$email ()$assunto");
    $mail->Body = $body;

    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        $status = "failed";
        $response = 'Email nao enviado :( <br>' . $mail->ErrorInfo;
    }

    exit(json_encode(array("status"=> $status, "response" => $response)));
    */
