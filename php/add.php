<?php
require_once 'connection.php';

var_dump($_POST);
$gender = $_POST['gender'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$month = $_POST['month'];
$year = $_POST['year'];
$day = $_POST['day'];
$postal = $_POST['postal'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$_conditions = $_POST['conditions'];

if (
!isset($gender) &&
!isset($lastname) && 
!isset($firstname) && 
!isset($email) && 
!isset($month) && 
!isset($year) &&
!isset($day) && 
!isset($postal) && 
!isset($password) && 
!isset($confirmpassword)
) {
    if($_conditions === 'off'){
        header('Location: ../index.php?agreeTerms');
    }
    header('Location: ../index.php?fieldsMissing');
} 