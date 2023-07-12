<?php 
require_once 'lib/config.php';
require_once  'lib/pdo.php';

$currentPage = basename($_SERVER['SCRIPT_NAME']);

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];

  // Effectuer une requête pour récupérer les informations de l'utilisateur à partir de la base de données
  $sql = "SELECT * FROM users WHERE id = :user_id";
  $query = $pdo->prepare($sql);
  $query->execute(['user_id' => $user_id]);
  $user = $query->fetch(PDO::FETCH_ASSOC);

} 

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CUISINEA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/override-bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

  <?php


  ?>

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/images/logo-cuisinea-horizontal.jpg" alt="Logo Cuisinea" width="250">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
        <?php foreach ($mainMenu as $key => $value) {?>
          <li><a href="<?= $key ?>" class="nav-link <?php if ($currentPage === $key) {echo "active";} ?>"><?= $value ?></a></li>

       <?php } ?>
      </ul>

      <div class="col-md-3 text-end">
      <?php
// ...

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; ?>
    <span class="nav-link">Connecté en tant que <?= $user['last_name'] ?> <?= $user['first_name'] ?> </span>
    <a href= "deconnexion.php" class="btn btn-primary">Déconnexion</a>
<?php } else { ?>
   
    <a href="connexion.php" class="btn btn-outline-primary me-2">Se connecter</a>
    <a href="inscription.php" class="btn btn-primary">S'inscrire</a>
<?php }
?>

    </div>
    </header>
