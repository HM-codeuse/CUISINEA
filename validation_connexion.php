<?php
require_once 'lib/pdo.php';
session_start();


// Récupérer les données du formulaire de connexion
$email = $_POST['email'];
$password = $_POST['password'];

// Récupérer les informations de l'utilisateur à partir de la base de données en utilisant l'email
$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // Vérifier le mot de passe haché
    if (password_verify($password, $user['password'])) {
        // Mot de passe correct, connecter l'utilisateur
        $_SESSION['user_id'] = $user['id'];
        header('Location: ajout_modification_recette.php');
        
    } else {
        // Mot de passe incorrect
        echo 'Mot de passe incorrect.';
    }
} else {
    // Utilisateur non trouvé
    echo 'Utilisateur non trouvé.';
}


?>
