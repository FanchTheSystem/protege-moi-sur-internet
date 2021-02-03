<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Navigateur</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/navigateur/">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Navigation, Navigateur, Firefox, Tor">
   <meta name="description" content="Bienvenue sur la page des navigateurs, proposée par Protège-moi sur Internet !">

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
              <li class="breadcrumb-item" aria-current="page">Navigateur</li>
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
              <img src="https://protege-moi-sur-internet.com/images/firefox.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Firefox</h5>
                <p class="card-text">Un navigateur open source et qui respecte votre vie privée !</p>
                <a href="https://protege-moi-sur-internet.com/navigateur/firefox.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/tor.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Tor</h5>
                <p class="card-text">Le navigateur qui vous protège de la surveillance !</p>
                <a href="https://protege-moi-sur-internet.com/navigateur/tor.php" role="button" class="btn">En savoir plus</a>
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