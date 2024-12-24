<?php
session_start();
include('base.php');
try{
    $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$login=$_POST['login'];
$mdp=$_POST['mdp'];
$rek=$base->query("SELECT*FROM utilisateur WHERE logina='".$login."' AND mdp='".$mdp."' ");
$i=0;
while($donnees=$rek->fetch()){
    $i++;
    $_SESSION["login"]= $donnees["logina"];
    $_SESSION["nom"]= $donnees["nom"];
}
if ($i==1){header ("Location:interface.php");} 
    else {header ("Location:index.php");} 
}

catch(PDOException $e){
    header ("Location:index.php");  
    }

?>