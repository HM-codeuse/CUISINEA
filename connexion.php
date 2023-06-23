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
    <form method="POST" action="validation_connexion.php" class="m-3 p-3">
        
        <label for="email" class="my-3">Email :</label>
        <input type="text" id="email" name="email" required><br>

        <label for="password" class="my-3">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Se connecter" class="center">
    </form>
</body>
</html>
