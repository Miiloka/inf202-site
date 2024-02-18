  <!-- Pour utiliser le CSS Bootstrap -->

<?php include "model/debutpage.php"; ?>
<link href="ressources/css/css_accueil.css" rel="stylesheet"/>


  <title>Accueil</title>
  </head>

  <body
  
  <!-- Barre de navigation -->

  <header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark navbar-custom"> <!-- Création de la navbar-->

      <div class="container-fluid"> <!-- Placement du logo & redirection -->
        <a class="navbar-brand" href="accueil.php">
          <img src="ressources/images/logo.png" alt ="Logo" style="width:75px ; height:auto;" class="d-inline-block">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown"> <!-- Mise en place des menus -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="accueil.php"><i class="bi bi-house-door-fill"></i> Accueil</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-stack"></i> Liste</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          				</li>
      			</ul>

          </li>

          <li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="page1.php"><i class="bi bi-wallet2"></i> Page</a>
            </li>

            </ul>
      </div>

      </div>
    </nav>
  </header>


<!-- Description complète du site -->
<div>
  <h1 style="text-align : center;">SERVICE D'OPHTALMOLOGIE</h1>
<p>Le service d'ophtalmologie de l'hôpital est l'unité spécialisée dans le diagnostic, le traitement et la gestion des affections liées aux yeux et à la vision. Il propose des consultations régulières pour les patients souhaitant des examens de routine afin d'évaluer leur vision, la santé de leurs yeux et de détecter tout problème potentiel. Les ophtalmologues hospitaliers sont qualifiés pour diagnostiquer et traiter une variété de maladies oculaires telles que la cataracte, le glaucome, la dégénérescence maculaire, les infections oculaires, etc. Les services d'ophtalmologie hospitaliers sont souvent équipés pour réaliser diverses interventions chirurgicales oculaires, y compris la chirurgie de la cataracte, la correction de la vision au laser (LASIK), la chirurgie de la rétine, etc. Dans notre service, nous assurons également les soins pédiatriques, les urgences oculaires et la rééducation visuelle. De plus, notre service est impliqué dans la recherche et la formation des futurs ophtalmologues. En somme, notre service offre une gamme complète de soins oculaires, allant des examens de routine aux interventions chirurgicales complexes, avec une approche multidisciplinaire visant à assurer la meilleure prise en charge possible des patients.</p>
<p>Le service d'ophtalmologie est spécialisé dans la prise en charge des kératocônes.</p>

<div class="row" style="padding:10px;">
  <div class="column">
    <h1 style="font-size : 30px">Centre référence du kératocône</h1>
    <p>Le kératocône est une maladie de l'œil qui affecte la forme et l'épaisseur de la cornée, la partie transparente à l'avant de l'œil. Normalement, la cornée a une forme arrondie, agissant comme une lentille pour diriger la lumière vers la rétine. Cependant, dans le cas du kératocône, la cornée s'amincit progressivement et prend une forme conique irrégulière, ce qui provoque une déformation de la vision.</p>
    <h5>Caractéristiques</h5> 
<ol>
<li>Amincissement de la cornée</li>
<li>Déformation de la cornée</li>
<li>Astigmatisme</li> 
<li>Troubles visuels</li> 
</ol>
</div>
  <div class="column_img">
    <img src="ressources/images/eye.jpg" alt="Yeux" style="width: 70%; display: block; margin: 0 auto;">
  </div>
</div>


<div class="row" style="padding:10px;">
  <h1>Nos engagments</h1>
    <p>Nous nous investissons également dans l'accessibilité des soins oculaires pour tous, en nous assurant que nos services sont disponibles et adaptés aux besoins individuels. Nous accordons une grande importance à l'éducation des patients pour favoriser une compréhension approfondie de leur santé visuelle. De plus, nous mettons un accent particulier sur la prévention des affections oculaires à travers des campagnes de sensibilisation et des examens réguliers.</p>
</div>


</main>

  <div style="height: 30px;"></div>


    <footer class="container-fluid-footer bg-grey py-5">
  <div class="container">
     <div class="row">
        <div class="col-md-6">
           <div class="row">
              <div class="col-md-6 ">
                 <div class="logo-part">
                   <a href="accueil.php">
                     <img src="ressources/images/logo.png" style="height:100px; " alt="Logo" class="d-inline-block">
                   </a>
                    <p>796 avenue de la vision, 33000, Bordeaux</p>
                    <p>Voyons plus clair ensemble</p>
                 </div>
              </div>
              <div class="col-md-6 px-4" style="text-align:justify">
                 <h6> A propos de nous</h6>
                 <p> Le service d'ophtalmologie de l'hôpital permet la prise en charge complète des patients, du contrôle de routine aux chirurgies les plus complexes. Le service est spécialisé dans la prise en charge des kératocônes</p>
              </div>
           </div>
        </div>
        <div class="col-md-6">
           <div class="row">
              <div class="col-md-6 px-4">
                 <h6> Divers</h6>
                 <div class="row ">
                    <div class="col-md-6">
                       <ul>
                          <li> <a href="accueil.php"> Accueil</a> </li>
                          <li> <a href="faq.php"> FAQ</a> </li>
                          <li> <a href="mentionslegales.php"> Mentions légales</a> </li>
                       </ul>
                    </div>
                    <div class="col-md-6 px-4">
                       <ul>
                         <li> <a href="staff.php"> L'équipe</a> </li>
                         <li> <a href="contact.php"> Contact</a> </li>
                         <li> <a href="cgu.php"> CGV/CGU</a> </li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-md-6 ">
                 <h6> Newsletter</h6>
                 <form class="form-footer my-3">
                    <input type="email" placeholder="Entrez votre mail..." name="search" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    <input type="button" value="S'inscrire" >
                 </form>
              </div>
           </div>
        </div>
     </div>
  </div>
  <p style="text-align:center">© 2024 OPH Institute, Tous Droits Réservés</p>
  </footer>

  </body>
</html>