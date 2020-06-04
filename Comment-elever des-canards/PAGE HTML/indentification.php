<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$db="REGISTER_VALIDATION";
if(!empty($_POST["pseudo"]) && !empty($_POST["pseudo"])){
    try{
      $connection= new PDO ("mysql:host=$server;dbname=$db", $user,$pass);
      $connect= 'SELECT  * FROM register WHERE User = "'.$_POST["pseudo"].'" AND Passwd = "'.$_POST["controlemdp"].'";';
      $resultat = $connection->query($connect);
      $resultat = $resultat->fetch();
      if(empty($resultat)) {
        echo 'Mauvais utilisateur <a href="indentification.html">Revenir en arrière </a>';
      }
      else {
        header("Location:index.html");
      }
    }
  catch (Exception $e){
      echo "Connectionerror:".$e;
      die();
  }
}else{
  header("Location:indentification.html");
}
