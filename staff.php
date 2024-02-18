<?php include "model/debutpage.php"; ?>
<link href="ressources/css/css_staff.css" rel="stylesheet" type="text/css" />
<title>L'équipe d'OPH Institute</title>
</head>
<body>

<?php include "model/navbar.php"; ?>

<h1 style="padding-top: 20px; text-align: center">L'équipe</h1>

<div class="container" style="padding-top: 20px">
  <div class="row"> <!-- Début de la ligne pour les 4 colonnes -->
    <div class="col-md-3"> <!-- Première colonne -->
      <div class="card">
        <p style="text-align:center; padding-top: 10px"><img src="ressources/images/adrien.jpeg" alt="Adrien" style="width:50%"></p>
        <div class="container">
          <h2>Adrien Orué</h2>
          <p class="title">Chasseur de têtes</p>
          <p>Chargé du recrutement de talents parmi les meilleurs chirurgiens optiques.</p>
          <p>adrienorue@gmail.com</p>
          <p><a href="mailto:adrienorue@gmail.com"><button class="button">Contact</button></a></p>
        </div>
      </div>
    </div>

    <div class="col-md-3"> <!-- Deuxième colonne -->
      <div class="card">
        <p style="text-align:center; padding-top: 10px"><img src="ressources/images/TPDNE2.jfif" alt="Maud Perpère" style="width:75%"></p>
        <div class="container">
          <h2>Maud Perpère</h2>
          <p class="title">Dresseur pokemon</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p>exemple@exemple.com</p>
          <p><a href="mailto:exemple@exemple.com"><button class="button">Contact</button></a></p>
        </div>
      </div>
    </div>

    <div class="col-md-3"> <!-- Troisième colonne -->
      <div class="card">
        <p style="text-align:center; padding-top: 10px"><img src="ressources/images/TPDNE3.jfif" alt="Léa Pasquet" style="width:75%"></p>
        <div class="container">
          <h2>Léa Pasquet</h2>
          <p class="title">TRUC</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p>exemple@exemple.com</p>
          <p><a href="mailto:exemple@exemple.com"><button class="button">Contact</button></a></p>
        </div>
      </div>
    </div>

    <div class="col-md-3"> <!-- Quatrième colonne, ajoutée correctement dans la rangée -->
      <div class="card">
        <p style="text-align:center; padding-top: 10px"><img src="ressources/images/TPDNE3.jfif" alt="Anne-Andrée" style="width:75%"></p>
        <div class="container">
          <h2>Anne-Andrée</h2>
          <p class="title">BIDULE</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p>exemple@exemple.com</p>
          <p><a href="mailto:exemple@exemple.com"><button class="button">Contact</button></a></p>
        </div>
      </div>
    </div>
  </div> <!-- Fin de la ligne -->
</div>

<div style="height: 30px;"></div> <!-- Espace entre le corps et le footer -->


<?php include "model/footer.php"; ?>
