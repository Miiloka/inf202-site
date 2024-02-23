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
      <input class="faq-cadre__trigger" id="faq-cadre-1" type="checkbox" /><label class="faq-cadre__titre" for="faq-cadre-1">A quelle fréquence devrais-je passer un examen de la vue ?</label>
      <div class="faq-cadre__content-wrapper">
        <div class="faq-cadre__content">
          <p>
            Il est recommandé de passer un examen de la vue tous les deux ans, même si vous ne présentez pas de symptômes. Cela permet de dépister les problèmes de vision au stade précoce.
          </p>
        </div>
      </div>
    </div>

    <div class="faq-cadre"> <!-- Question 2 -->
      <input class="faq-cadre__trigger" id="faq-cadre-2" type="checkbox" /><label class="faq-cadre__titre" for="faq-cadre-2">Proposez-vous des consultations en ligne ?</label>
      <div class="faq-cadre__content-wrapper">
        <div class="faq-cadre__content">
          <p>
            Oui, certaines consultations peuvent être effectuées en ligne pour des problèmes oculaires mineurs. Cependant, pour des examens approfondis ou des problèmes graves, une consultation en personne est souvent nécessaire.
          </p>
        </div>
      </div>
    </div>

    <div class="faq-cadre"> <!-- Question 3 -->
      <input class="faq-cadre__trigger" id="faq-cadre-3" type="checkbox" /><label class="faq-cadre__titre" for="faq-cadre-3">Comment puis-je prendre rendez-vous ? </label>
      <div class="faq-cadre__content-wrapper">
        <div class="faq-cadre__content">
          <p>
            Vous pouvez prendre rendez-vous en ligne sur Doctolib ou en nous appelant directement le secrétariat. Nous sommes là pour répondre à toutes vos questions et vous fournir les soins oculaires dont vous avez besoin.
          </p>
        </div>
      </div>
    </div>

    <div class="faq-cadre"> <!-- Question 4 -->
      <input class="faq-cadre__trigger" id="faq-cadre-4" type="checkbox" /><label class="faq-cadre__titre" for="faq-cadre-4">Comment prendre soin de mes yeux au quotidien ? 

</label>
      <div class="faq-cadre__content-wrapper">
        <div class="faq-cadre__content">
          <p>
            Prenez des pauses régulières lorsque vous travaillez sur un écran, protégez vos yeux du soleil avec des lunettes de soleil appropriées, maintenez une alimentation saine riche en nutriments, et évitez le tabagisme pour préserver la santé de vos yeux.
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include "model/footer.php"; ?>
