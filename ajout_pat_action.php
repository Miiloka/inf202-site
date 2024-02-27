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

$req = $pdo->prepare("INSERT INTO tab_patient (Num_dossier, Date_debut_suivi , Nom, Pren, Sexe) VALUES (:p_num,CURRENT_TIMESTAMP,:p_nom,:p_pren,:p_sexe)");
$req->execute(array('p_pren' => $_POST['prenom'] , 'p_nom' => $_POST['nom'] , 'p_num' => $_POST['num'], 'p_sexe' => $_POST['sexe']));


if ($req) 	{	echo "Le patient ".htmlspecialchars($_POST['prenom'])." ".htmlspecialchars($_POST['nom'])." a bien été ajouté.";
						echo "<a href='donnees_patients_accueil.php'> Retour </a> ";
					}
?>

<?php include "model/footer.php"; ?>

</body>