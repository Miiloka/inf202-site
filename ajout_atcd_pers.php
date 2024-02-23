<?php include "model/debutpage.php"; ?>

<title>Ajout d'antécédants personnels</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

	<head>
		<meta charset="utf-8" />	
</head>
<body>
<?php

// connexion  à la base de données
include("connexion_base.php");
<?php>
		if(isset($_POST["ajout_atcd_pers"]{
			$req = $bdd->prepare('INSERT INTO tab_atcdperso (Num_dossier, Categorie_atcd, Traitement_act, Traitement_passe) VALUES (:num_user, :cat_atcd, :trt_act, :trt_passe);
			$req->execute(array('num_user' => $_POST['Num_dossier'], 'cat_atcd' => $_POST['Categorie_atcd'], 'trt_act' => $_POST['Traitement_act'], 'trt_passe' => $_POST['Traitement_passe']));

?>
<?php include "model/footer.php"; ?>

</body>
