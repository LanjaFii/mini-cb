<?php
session_start();
include('base.php');
try{
    $nom=$_POST['nom'];
    $login=$_POST['login'];
    $mdp1=$_POST['mdp1'];
    $mdp2=$_POST['mdp2'];
    if($mdp1===$mdp2){
        $base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $table = $base-> prepare("CREATE TABLE $login(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        typage VARCHAR(5),
        mess TEXT
        )" );
        $table->execute();

            $ajout_utilisateur = $base-> prepare("INSERT INTO utilisateur(nom,logina,mdp)
                                            VALUES (:nom, :logina, :mdp)" );

            $ajout_utilisateur-> bindParam(':nom', $nom);
            $ajout_utilisateur-> bindParam(':logina', $login);
            $ajout_utilisateur-> bindParam(':mdp', $mdp1);
            $ajout_utilisateur->execute();

        $requete=$base->query("SELECT*FROM utilisateur WHERE logina='".$login."' AND mdp='".$mdp1."' ");
        $i=0;
        while($donnees=$requete->fetch()){
            $i++;
            $_SESSION["login"]= $login;
            $_SESSION["nom"]= $nom;
        }

            header("Location:interface.php");
    }
    else{
        header("Location:nouveaucompte.php");
    }
}

catch(PDOException $e){
    header ("Location:nouveaucompte.php");  
    }

?>