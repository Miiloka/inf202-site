<!-- Barre de navigation -->
<header>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark navbar-custom"> <!-- Création de la navbar-->

    <div class="container-fluid"> <!-- Placement du logo & redirection -->
      <a class="navbar-brand" href="accueil.php">
        <img src="ressources/images/logo.png" alt="Logo" style="width:75px; height:auto;" class="d-inline-block align-top">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown"> <!-- Mise en place des menus -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="accueil.php"><i class="bi bi-house-door-fill"></i> Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="donnees_service.php"><i class="bi bi-stack"></i> Données de service</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="formulaire_co_equipe.php"><i class="bi bi-wallet2"></i> Me connecter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Rajouter un espace entre la navbar et le body -->
<div class="container-fluid" style="height: 50px;"></div>