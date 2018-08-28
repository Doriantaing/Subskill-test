<?php 

session_start();

$email = $_SESSION['user']['email'];
$lastname = $_SESSION['user']['lastname'];
$firstname = $_SESSION['user']['firstname'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/src/Exception.php';
require 'phpMailer/src/PHPMailer.php';
require 'phpMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try{

    $mail->IsHTML(true);
    
    $mail->CharSet = "utf-8";
    
    $mail->setFrom('dorian.taing@hetic.net', 'Dorian Taing');
    
    $mail->Subject = 'Inscription fait';
    
    $mail->Body = '
    <head>
    <style>
      body{
          background : #A15E49;
      }
      h1{
        font-size: 30px;
      }
      .img-container{
          width: 450px;
          height: 250px;
      }
      img{
          width: 100%;
          height: 100%;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
    <div class="container">
    <h1>Hello '.$firstname ." ".$lastname.'</h1>
    <h4>Merci de t\'etre inscrit ! 😄</h4>
    <div class="img-container">
    <img src="https://image.noelshack.com/fichiers/2018/35/1/1535363743-hello.gif" alt="hello gif"/>
    </div>
    </div>
    </body>
    ';
    $mail->AddAddress(''.$email.'');
    $mail->send();
    
    header('location: ../feedback.php');
} catch(exception $e){
    echo 'errorr';
    echo $mail->ErrorInfo;
}


;