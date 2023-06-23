<?php
    require_once 'lib/pdo.php';

    // Récupérer les données du formulaire d'inscription
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hasher le mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    // Vérifier si l'utilisateur existe déjà en base de données
    $checkSql = "SELECT COUNT(*) FROM users WHERE email = :email";
    $checkStmt = $pdo->prepare($checkSql);
    $checkStmt->execute(['email' => $email]);
    $count = $checkStmt->fetchColumn();

    if ($count > 0) {
        // Utilisateur déjà enregistré, afficher un message d'erreur ou effectuer une autre action
        echo 'Cet utilisateur est déjà enregistré.';
        echo '<br>';
        echo '<a href="inscription.php" class="btn btn-primary">Retour à la page d\'inscription</a>';
    } else {
        // Insérer les données dans la base de données
        $insertSql = "INSERT INTO users (last_name, first_name, email, password) VALUES (:last_name, :first_name, :email, :password)";
        $insertStmt = $pdo->prepare($insertSql);
        $insertStmt->execute(['last_name' => $last_name, 'first_name' => $first_name, 'email' => $email, 'password' => $hashedPassword]);

        // Fermer la connexion à la base de données
        $pdo = null;

        // Rediriger vers la page d'accueil
        header('Location: index.php');
        exit();
    }


?>
