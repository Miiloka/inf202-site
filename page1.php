<!-- Pour utiliser le CSS Bootstrap -->

  <?php include "model/debutpage.php"; ?>

<link href="ressources/css/css_formules.css" rel="stylesheet" type="text/css" />

<title>Formules</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<div class="formules">
        <div class="container">

            <div class="row text-center"> <!-- Formules de cours -->
                <h1 class="heading-title">Nos formules - Cours</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                Standard
                            </span>
                        </div>
                        <div class="pricing-plans">
                            <span class="price-value"><i class="fa fa-usd"></i><span>7,99€/mois</span></span>
                            <span class="subtitle">L'essentiel</span>
                        </div>
                        <div class="pricingContent">
                            <ul>
                                <li><img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/> Accès à tous les cours</li>
                                <li><img src="https://img.icons8.com/emoji/48/000000/cross-mark-emoji.png"/> Tchat restreint</li>
                                <li><img src="https://img.icons8.com/emoji/48/000000/cross-mark-emoji.png"/> Cours particulier</li>
                            </ul>
                        </div>

                        <div class="pricingTable-sign-up">
                            <a href="#" class="btn btn-block btn-default">Choisir</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                               Ascension
                            </span>
                        </div>
                        <div class="pricing-plans">
                            <span class="price-value"><i class="fa fa-usd"></i><span>14,99€/mois</span></span>
                            <span class="subtitle">S'aider d'un professeur dans une matière</span>
                        </div>
                        <div class="pricingContent">
                            <ul>
                              <li><img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/> Accès à tous les cours</li>
                              <li><img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/> Tchat restreint</li>
                              <li><img src="https://img.icons8.com/emoji/48/000000/cross-mark-emoji.png"/> Cours particulier</li>
                            </ul>
                        </div>

                        <div class="pricingTable-sign-up">
                            <a href="#" class="btn btn-block btn-default">Choisir</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                Premium
                            </span>
                        </div>
                        <div class="pricing-plans">
                            <span class="price-value"><i class="fa fa-usd"></i><span>24,99€/mois</span></span>
                            <span class="subtitle">Aide illimité, toutes matières</span>
                        </div>
                        <div class="pricingContent">
                            <ul>
                              <li><img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/> Accès à tous les cours</li>
                              <li><img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/> Tchat illimité</li>
                              <li><img src="https://img.icons8.com/emoji/48/000000/check-mark-emoji.png"/>Cours particulier dans toutes les matières</li>
                            </ul>
                        </div>

                        <div class="pricingTable-sign-up">
                            <a href="#" class="btn btn-block btn-default">Choisir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "model/footer.php"; ?>
