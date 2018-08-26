<?php 

try{
    $conn = new PDO('mysql:dbname = test_subskill ;host=127.0.0.1','root','hetic');
} catch(PDOException $exception){
    die('NOOOOOOOOO');
}

?>