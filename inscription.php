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
        <label for="last_name" class="my-3">Nom:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="first_name" class="my-3">Prénom:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="password" class="my-3">Mot de passe: </label>
        <input type="password" id="password" name="password" required><br>

        <label for="email" class="my-3">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
