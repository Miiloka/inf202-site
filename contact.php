<!-- Pour utiliser le CSS Bootstrap -->

  <?php include "model/debutpage.php"; ?>

<link href="ressources/css/css_contact.css" rel="stylesheet"/>

<title>Nous contacter</title>

</head>

<body>


<?php include "model/navbar.php"; ?>

<div id="container">
  <h1>&bull; Contactez-nous ! &bull;</h1>
  <div class="underline">
  </div>
  <div class="icon_wrapper">
    <p style="text-align :center"> <img src="https://img.icons8.com/dusk/64/000000/new-contact.png" alt="Icone de contact"/> </p>
  </div>
  <form name ="contact" action="envoie_formulaire.php" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Je m'appelle..." name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="Mon mail est ..." name="email" id="email_input" required>
    </div>
    <div class="sujet">
      <label for="name"></label>
      <input type="text" placeholder="Sujet..." name="sujet" id="sujet_input" required>
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="Mon message..." id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Envoyer le message" name ="envoi" id="form_button" />
    </div>
  </form>
</div>

<?php include "model/footer.php"; ?>
