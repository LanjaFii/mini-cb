<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mini chatbot</title>
</head>
<body>
    <fieldset>
        <legend>Connexion Chatbot</legend>
        <form action="connexion.php" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" required="required"><br><br>

            <label for="mdp">Mot de passe:</label>
            <input type="password" name="mdp" id="mdp" required="required"><br><br>

            <input type="submit" value="Entrer" class="ok">
        </form>
        <br><br>
        <a href="nouveaucompte.php" class="new"><h4>Creer un compte</h4></a>
    </fieldset>
    <br><br>
    <a href="matrice/index.html" class="matrice"><h2>Addition matricielle</h2></a>
</body>
</html>