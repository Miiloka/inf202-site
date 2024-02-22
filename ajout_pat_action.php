<!-- codé par Anne-Andrée -->

<?php include "model/debutpage.php"; ?>

<title>Ajout du patient</title>
<body>
<?php include "model/navbar.php"; ?>
<head>
<meta charset="utf-8" />	
</head>

<?php
include("connexion_base.php");

$req = $pdo->prepare("INSERT INTO tab_patient (Num_dossier, Date_debut_suivi , Nom, Pren) VALUES ('".$_POST['num']."',CURRENT_TIMESTAMP,'".$_POST['nom']."','".$_POST['prenom']."')");

if ($req) 	{	echo "Le patient ".htmlspecialchars($_POST['prenom'])." ".htmlspecialchars($_POST['nom'])." a bien été ajouté.";
						echo "<a href='donnees_patients_accueil.php'> Retour </a> ";
					}
?>

<?php include "model/footer.php"; ?>

</body>