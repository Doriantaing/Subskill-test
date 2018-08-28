<?php

session_start();

require_once 'connection.php';

$_SESSION['user']['email'] = $_POST['email'];
$_SESSION['user']['lastname'] = $_POST['lastName'];
$_SESSION['user']['firstname'] = $_POST['firstName'];

$password  = password_hash($_POST['password'] , PASSWORD_DEFAULT);

// CHECK if all input values have been entered
if (!isset($_POST['gender']) ||
!isset($_POST['lastName'])||
!isset($_POST['firstName']) ||
!isset($_POST['email']) ||
!isset($_POST['month']) ||
!isset($_POST['year']) ||
!isset($_POST['day']) ||
!isset($_POST['postal'])||
!isset($_POST['password']) ||
!isset($_POST['confirmPassword'])) {
    header('Location: ../index.php?fieldsMissing');
    exit;
} 

// CHECK if input checkbox is checked

if(!isset($_POST['conditions'])){
    header('Location: ../index.php?agreeTerms');
    exit;
}
// CHECK if the passwords entered are the same

if (password_verify($_POST['confirmPassword'], $password) == false) {
    header('Location: ../index.php?passwordsDifferent');
    exit;    
}

// SQL REQUEST

$req = "INSERT INTO 
`test_subskill` . `signIn` 
(`id` , `gender` ,`lastname` , `firstname` , `email` , `month` , `year`, `day`, `postal` , `password`) 
VALUES 
(NULL , :gender , :lastName , :firstName , :email , :month , :year , :day , :postal , :password)
;";

$stmt = $conn->prepare($req);
$stmt -> bindValue(':gender' , $_POST['gender']);
$stmt -> bindValue(':lastName' , $_POST['lastName']);
$stmt -> bindValue(':firstName' , $_POST['firstName']);
$stmt -> bindValue(':email' , $_POST['email']);
$stmt -> bindValue(':month' , $_POST['month']);
$stmt -> bindValue(':year' , $_POST['year']);
$stmt -> bindValue(':day' , $_POST['day']);
$stmt -> bindValue(':postal' , $_POST['postal']);
$stmt -> bindValue(':password' , $password);
$stmt->execute();

header('Location: sendMail.php');



