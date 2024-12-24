<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nouveau compte</title>
</head>
<body>
    <fieldset>
        <legend>Nouveau compte pour Mini Chatbot</legend>
        <form action="ajout.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required="required"><br><br>

            <label for="login">Login:</label>
            <input type="yext" name="login" id="login" required="required"><br><br>

            <label for="mdp1">Mot de passe:</label>
            <input type="password" name="mdp1" id="mdp1" required="required"><br><br>

            <label for="mdp2">Confirmez le mot de passe:</label>
            <input type="password" name="mdp2" id="mdp2" required="required"><br><br>

            <input type="submit" value="Creer" class="ok">
        </form>
        <br><br>
        <a href="index.php" class="new"><h4>Connexion</h4></a>
    </fieldset>
</body>
</html>