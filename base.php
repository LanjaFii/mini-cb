<?php
    try{
        $base=new PDO('mysql:host=localhost;dbname=chatbot','root','');
    } 
    catch (Exception $e) 
    {
        die('Erreur;'.$e->getMessage());
    }
?>