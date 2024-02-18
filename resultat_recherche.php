<!-- Pour utiliser le CSS Bootstrap -->

  <?php include "model/debutpage.php"; ?>
  <link href="ressources/css/css_resultat.css" rel="stylesheet"/>

<title>Résultat de la recherche</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<?php


if (!empty($_POST['recherche']) && empty($_POST['matiere']) )
	{
		$recherche = $_POST['recherche'];
		$requete1 = "SELECT * FROM intervenant WHERE ville ='$recherche' ;";
		$reponse1 = $pdo->prepare($requete1);
		$reponse1->execute();
		// récupérer tous les enregistrements dans un tableau
		$enregistrements1 = $reponse1->fetchAll();
		// connaitre le nombre d'enregistrements
		$nombreReponses1 = count($enregistrements1);
		// parcourir le tableau des enregistrements
		for ($a=0; $a<count($enregistrements1); $a++)
		{
		?>
			<div class="how-section1">
								<div class="row">
									<div class="col-md-6 how-img">
										<img src="ressources/images/avatar_neutre.png" class="rounded-circle img-fluid" alt=""/>
									</div>
									<div class="col-md-6" style="text-align: center ; margin-top : auto ; margin-bottom : auto">
										<h4><?php echo $enregistrements1[$a]['nom']."  ".$enregistrements1[$a]['prenom']; ?></h4>
													<h4 class="subheading"><?php echo "Exerce en tant que  ".$enregistrements1[$a]['profession']."  à  ". $enregistrements1[$a]['ville']  ?></h4>
									<p class="text-muted"><?php echo $enregistrements1[$a]['description'] ?></p>
									<p><a href="mailto:<?php echo $enregistrements1[$a]['email'] ; ?>" ><button class="button">Contact</button></a></p>
									</div>
			 </div>
		<?php
		}
	}


if (empty($_POST['recherche']) && !empty($_POST['matiere']) )
	{
		$matiere = $_POST['matiere'];
		$requete2 = "SELECT intervenant.*  FROM intervenant, jointure_checkbox, matiere  WHERE intervenant.id = jointure_checkbox.id_intervenant AND jointure_checkbox.id_matiere= matiere.id AND matiere.id= $matiere ;";
		$reponse2 = $pdo->prepare($requete2);
		$reponse2->execute();
		// récupérer tous les enregistrements dans un tableau
		$enregistrements2 = $reponse2->fetchAll();
		// connaitre le nombre d'enregistrements
		$nombreReponses2 = count($enregistrements2);
		// parcourir le tableau des enregistrements
		for ($b=0; $b<count($enregistrements2); $b++)
		{
		?>
			<div class="how-section1">
								<div class="row">
									<div class="col-md-6 how-img">
										<img src="ressources/images/avatar_neutre.png" class="rounded-circle img-fluid" alt=""/>
									</div>
									<div class="col-md-6" style="text-align: center ; margin-top : auto ; margin-bottom : auto">
										<h4><?php echo $enregistrements2[$b]['nom']."  ".$enregistrements2[$b]['prenom']; ?></h4>
													<h4 class="subheading"><?php echo "Exerce en tant que  ".$enregistrements2[$b]['profession']."  à  ". $enregistrements2[$b]['ville']  ?></h4>
									<p class="text-muted"><?php echo $enregistrements2[$b]['description'] ?></p>
									<p><a href="mailto:<?php echo $enregistrements2[$b]['email'] ; ?>" ><button class="button">Contact</button></a></p>
									</div>
			 </div>
		<?php
		}
	}


if (!empty($_POST['recherche']) && !empty($_POST['matiere']) )
	{
		$matiere = $_POST['matiere'];
		$recherche = $_POST['recherche'];
		$requete3 = "SELECT intervenant.*  FROM intervenant, jointure_checkbox, matiere  WHERE intervenant.id = jointure_checkbox.id_intervenant AND jointure_checkbox.id_matiere= matiere.id AND matiere.id= $matiere AND ville ='$recherche' ;";
		$reponse3 = $pdo->prepare($requete3);
		$reponse3->execute();
		// récupérer tous les enregistrements dans un tableau
		$enregistrements3 = $reponse3->fetchAll();
		// connaitre le nombre d'enregistrements
		$nombreReponses3 = count($enregistrements3);
		// parcourir le tableau des enregistrements
		for ($c=0; $c<count($enregistrements3); $c++)
		{
		?>
			<div class="how-section1">
								<div class="row">
									<div class="col-md-6 how-img">
										<img src="ressources/images/avatar_neutre.png" class="rounded-circle img-fluid" alt=""/>
									</div>
									<div class="col-md-6" style="text-align: center ; margin-top : auto ; margin-bottom : auto">
										<h4><?php echo $enregistrements3[$c]['nom']."  ".$enregistrements3[$c]['prenom']; ?></h4>
													<h4 class="subheading"><?php echo "Exerce en tant que  ".$enregistrements3[$c]['profession']."  à  ". $enregistrements3[$c]['ville']  ?></h4>
									<p class="text-muted"><?php echo $enregistrements3[$c]['description'] ?></p>
									<p><a href="mailto:<?php echo $enregistrements3[$c]['email'] ; ?>" ><button class="button">Contact</button></a></p>
									</div>
			 </div>
		<?php
		}
	}
?>
<?php include "model/footer.php"; ?>
