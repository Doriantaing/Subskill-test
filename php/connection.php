<?php 

try{
    $conn = new PDO('mysql:host=127.0.0.1;dbname=test_subskill','root','hetic');
} catch(PDOException $exception){
    die($exception->getMessage());
    die('NOOOOOOOOO');
}

?>
