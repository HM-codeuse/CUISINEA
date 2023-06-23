<?php
  require_once('templates/header.php');
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="POST" action="validation_connexion.php">
        
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
