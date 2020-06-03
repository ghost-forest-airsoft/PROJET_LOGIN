<?php
$server="localhost";
$user="root";
$pass="";
$db="REGISTER_VALIDATION";

try{
    $connection= new PDO ("mysql:host=$server;dbname=$db", $user,$pass);
    $connect= 'SELECT  * FROM register WHERE User = "'.$_POST["pseudo"].'" AND Passwd = "'.$_POST["controlemdp"].'";';
    $resultat = $connection->query($connect);
    $resultat = $resultat->fetch();
    if(empty($resultat)) {
      echo "cool t co ";
    }
    else {
        echo "Connection waa trop cool ";
    }
  }
  if (isset($_POST['pseudo']) and isset($_POST['controlemdp'])) {
  catch (Exception $e){
      echo "Connectionerror:".$e;
      die();
  }
