<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Chiffrement</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/chiffrement/">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Sécurité, Chiffrement, Cryptomator, VeraCrypt">
   <meta name="description" content="Bienvenue sur la page des logiciels de chiffrement, proposée par Protège-moi sur Internet !">

   <?php
      require_once '../require/lien.php';
   ?>
  
  </head>
  <body>

    <!-- Navigation -->
    <?php
      require_once '../require/nav.php';
    ?>

    <!--Séparateur-->
    <div class="py-4"></div>

    <!-- Alert -->
    <?php
      require_once '../require/alert.php';
    ?>

    <!--Séparateur-->
    <div class="py-4"></div>

    <!-- Fil d'ariane -->
  <div class="container">
    <div class="row">
        <div class="col-md">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/">Accueil</a></li>
              <li class="breadcrumb-item" aria-current="page">Chiffrement</li>
            </ol>
          </nav>
        </div>
    </div>
  </div>

  <!--Séparateur-->
  <div class="py-4"></div>

    <!--Catégorie-->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/cryptomator.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Cryptomator</h5>
                <p class="card-text">Le logiciel de chiffrement pour le nuage !</p>
                <a href="https://protege-moi-sur-internet.com/chiffrement/cryptomator.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/veracrypt.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">VeraCrypt</h5>
                <p class="card-text">La relève de TrueCrypt !</p>
                <a href="https://protege-moi-sur-internet.com/chiffrement/veracrypt.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!-- Séparateur -->
    <div class="py-2"></div>

    <!-- Footer -->
    <?php
      require_once '../require/footer.php';
    ?>

  </body>
</html>