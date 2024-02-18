<!-- Pour utiliser le CSS Bootstrap -->

  <?php include "model/debutpage.php"; ?>

<title>Profil</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<?php

	if (isset($_SESSION['id_membre']))
	{
		// exécuter une requete MySQL
		$requete = "SELECT * FROM image WHERE id_intervenant=?";
		$reponse = $pdo->prepare($requete);
		$reponse->execute(array($_SESSION['id_membre']));
		// récupérer tous les enregistrements dans un tableau
		$enregistrements = $reponse->fetchAll();
		// connaitre le nombre d'enregistrements
		$nombreReponses = count($enregistrements);
		// parcourir le tableau des enregistrements
		$image_inter = $enregistrements[0]['id_intervenant'];

		?>
		<div class="card mx-auto" style="width: 30rem; margin : 10px; max-width:540px;">
		  <div class="row g-0">
			<div class="col-md-4">
			  <img src="ressources/images/photo_intervenant/intervenant-<?php echo $image_inter;?>.jpeg" alt="Pdp" width="190px">
			</div>
			<div class="col-md-8">
			  <div class="card-body">
				<h5 class="card-title">Vos informations</h5>
				<p class="card-text">
					<p> Nom:  <?php echo $_SESSION['nom']; ?> </p>
					<p> Prénom:  <?php echo $_SESSION['prenom']; ?> </p>
					<p> Adresse e-mail: <?php echo $_SESSION['email']; ?> </p>

				</p>
				<p class="card-text"><small class="text-muted"> Vous êtes inscrit(e) depuis le  <?php echo $_SESSION['dateinscrit']; ?> </small></p>
			  </div>
			</div>
		  </div>
		</div>
		<?php
	}
	else
	{
		echo "Vous n'êtes pas connecté"; ?>
		<p> <a href="accueil.php" >Revenir à l'accueil</a> </p>
		<?php
	}
	?>

<?php include "model/footer.php"; ?>
