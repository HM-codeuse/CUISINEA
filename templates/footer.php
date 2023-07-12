<?php

  require_once('templates/header.php');
  require_once('lib/category.php');


  $categories = getCategories($pdo);
  $recipes = getRecipes($pdo, _HOME_RECIPES_LIMIT_);
  

?>

<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <p class="text-muted">© 2023 DSB Agency, Tous droits réservés</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Dernières recettes</h5>
      <ul class="nav flex-column">
      <?php foreach ($recipes as $key => $recipe) { ?>
        <li class="nav-item mb-2">
        <?= $recipe['title'];?>
       <?php   } ?>
        </li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Catégories</h5>
      <ul class="nav flex-column">
      <?php foreach ($categories as $key => $categorie) { ?>
        <li class="nav-item mb-2">
        <?= $categorie['name'];?>
       <?php   } ?>
        </li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Les bests de cuisinea</h5>
      <ul class="nav flex-column">
      <?php foreach ($recipes as $key => $recipe) { ?>
        <li class="nav-item mb-2">
        <?= $recipe['title'];?>
       <?php   } ?>
        </li>
      </ul>
    </div>
  </footer>

  </div>




</body>
</html>