<?php 

session_start();

$email = $_SESSION['user']['email'];

require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);

$mail->IsHTML(true);

$mail->CharSet = "utf-8";

$mail->setFrom('doriantaing77@hotmail.fr', 'Dorian Taing');

$mail->Subject = 'Inscription fait';

$mail->Body = '
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div class="container">
<h1>Hello</h1>
</div>
</body>
';
$mail->AddAddress(''.$email.'');
$mail->send();

;