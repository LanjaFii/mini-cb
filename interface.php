<?php
    session_start();
    include('base.php');
    $log = strtolower($_SESSION['login']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="interface.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
 
    <div class="tout">
    <a href="deconnexion.php" class="deks"><h2>Deconnexion<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px"><path fill="red" d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z"/></svg></h2></a>
    <a href="effacer.php" class="deks"><h2>Reinitialiser<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20px" height="20px"><path fill="red" d="M576 128c0-35.3-28.7-64-64-64H205.3c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7H512c35.3 0 64-28.7 64-64V128zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg></h2></a>
    <?php
        echo '<h4> Connécté en tant que <span>'.$_SESSION['login']. '</span></h4>';
    ?>
    
    
    <div class="conteneur">
        <fieldset><legend>Discussion</legend>
        <div class="discu" id="scrollable">
           

            <?php
            include("base.php");
            $mess_bot= $base->query("SELECT id,typage,mess FROM $log");
            while($chat= $mess_bot->fetch()){
                 
                if($chat["typage"]=='robot'){
                    $align = 'left;';
                    $couleur = 'aqua;';
                }
                else{
                    $align = 'right;';
                    $couleur = 'white;';
                }
                
            
                echo '<p class="soratra" style="color:' .$couleur. 'text-align:' .$align. '">'.$chat["mess"].'<br></p>';
            }
            ?>
            
        </div>
        <form action="traitement.php" method="post">
            <input type="text" placeholder="Message" name="mess" id="mess" class="chat" required="required">
            <input type="submit" value="Envoi" class="bouton">
        </form>
        </fieldset>
    </div>
    
        <script>
            var scrollable = document.getElementById('scrollable');
            scrollableElement.scrollBottom = scrollableElement.scrollHeight;
        </script>
        
       
    </div>

</body>
</html>
<?php
    if($_SESSION["nom"]==""){
        header ('Location:index.php');  
    }
?>