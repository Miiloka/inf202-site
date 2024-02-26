
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
$req = $pdo->prepare('SELECT Categorie_atcd, COUNT(Categorie_atcd) as nb_atcd FROM tab_atcdperso WHERE Num_dossier = :num_user GROUP BY Categorie_atcd');

// exécution de la requête 
$req->execute(array('num_user' => $_POST['num_dossier']));

// Affichage des résultats
    while ($ligne = $req->fetch()) {
        echo "Le patient a eu " . $ligne['nb_atcd'] . " antécédant(s) de catégorie " . $ligne['Categorie_atcd'] . "</br>";
    }
?>
</body>


<?php include "model/footer.php"; ?>

</body>

