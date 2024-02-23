
<?php include "model/debutpage.php"; ?>

<title>Recherche d'antécédants personnels</title>

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

// définition de la requête 
$req = $pdo->prepare('select Categorie_atcd, count(Categorie_atcd) as nb_atcd from tab_atcdperso where Num_dossier = :num_user');
// exécution de la requête 
$req->execute(array('num_user' => $_POST['num_dossier']));

// Récupération des
$ligne = $req->fetch();
echo "Le patient ".$num_user, "a eu des antécédants de catégorie " .$Categorie_atcd ;
?>
</body>


<?php include "model/footer.php"; ?>

</body>

