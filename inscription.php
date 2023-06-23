<?php
  require_once('templates/header.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form method="POST" action="validation_inscription.php">
        <label for="last_name">Nom:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="first_name">Prénom:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="password">Mot de passe: </label>
        <input type="text" id="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
