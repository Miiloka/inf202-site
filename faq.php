<!-- Pour utiliser le CSS Bootstrap -->

  <?php include "model/debutpage.php"; ?>
<link href="ressources/css/css_faq.css" rel="stylesheet"/>

<title>FAQ</title>

</head>

<body>
<?php include "model/navbar.php"; ?>

<main>
  <div class="container_faq">

    <h1 style = "text-align:center;">Questions fréquentes</h1>

    <div class="faq-cadre"> <!-- Question 1 -->
      <input class="faq-cadre__trigger" id="faq-cadre-1" type="checkbox" /><label class="faq-cadre__titre" for="faq-cadre-1">Je souhaite enseigner, que dois-je faire ? </label>
      <div class="faq-cadre__content-wrapper">
        <div class="faq-cadre__content">
          <p>
            Tout d'abord, merci de vouloir contribuer à la réussite de ce site ! Il suffit de s'inscrire, puis votre inscription sera ou non validé par Adrien Orué, responsable pédagogique. Vous pouvez être amené à faire un entretien en visio pour répondre à de potentiels questions.
          </p>
        </div>
      </div>
    </div>

    <div class="faq-cadre"> <!-- Question 2 -->
      <input class="faq-cadre__trigger" id="faq-cadre-2" type="checkbox" /><label class="faq-cadre__titre" for="faq-cadre-2">Puis-je changer de formule à tout moment ?</label>
      <div class="faq-cadre__content-wrapper">
        <div class="faq-cadre__content">
          <p>
            Bien-sûr ! Il faudra payer la différence si la formule est plus cher, ou vous serez remboursé la différence pour une formule à moindre prix.
          </p>
        </div>
      </div>
    </div>

    <div class="faq-cadre"> <!-- Question 3 -->
      <input class="faq-cadre__trigger" id="faq-cadre-3" type="checkbox" /><label class="faq-cadre__titre" for="faq-cadre-3">Comment puis-je vous contacter ?</label>
      <div class="faq-cadre__content-wrapper">
        <div class="faq-cadre__content">
          <p>
            Il suffit de cliquer sur la page "contact" pour une demande à tout le staff, ou "équipe" pour une demande personnel à un membre du staff, en bas du site, puis de remplir le formulaire.
          </p>
        </div>
      </div>
    </div>

    <div class="faq-cadre"> <!-- Question 4 -->
      <input class="faq-cadre__trigger" id="faq-cadre-4" type="checkbox" /><label class="faq-cadre__titre" for="faq-cadre-4">Quels contenus sont disponibles ?

</label>
      <div class="faq-cadre__content-wrapper">
        <div class="faq-cadre__content">
          <p>
            Nous proposons des contenus pour toutes les matières pour les classes du CP à la Faculté. Tous ces contenus sont rédigés selon les programmes de l’Éducation Nationale, par des professionnels de l’édition scolaire. Vous pourrez retrouver des vidéos, des quiz, des exercices, des méthodes et bien plus !
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include "model/footer.php"; ?>
