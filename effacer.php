<?php
session_start();
include('base.php');
$log =  strtolower($_SESSION['login']);
try{
        $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $mivide = $base-> prepare("DELETE FROM $log");
        $mivide->execute();


            header("Location:interface.php");

}

catch(PDOException $e){
    echo 'Erreur de mise a jour: ' .$e->getMessage();
}

?>