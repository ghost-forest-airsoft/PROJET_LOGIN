<?php

$server="localhost";
$user="root";
$pass="";
$db="REGISTER_VALIDATION";

try{
    $connection= new PDO ("mysql:host=$server;dbname=$db", $user,$pass);
    $query='INSERT INTO register(User, Passwd, Email) VALUES ("'.$_POST["formlogin"].'","'.$_POST["formmdp"].'","'.$_POST["formemail"].'");';
    $connection->query($query);
    header("Location:doc.html");
    }

    catch (Exception $e){
        echo "Connectionerror:".$e;
        die();
    }
?>
