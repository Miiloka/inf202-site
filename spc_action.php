<!-- codé par Anne-Andrée -->

<?php include "model/debutpage.php"; ?>

<title>Ajout du patient</title>
<body>
<?php include "model/navbar.php"; ?>
<head>
<meta charset="utf-8" />	
</head>

<!-- modification de la variable N° dossier en num_dossier dans tab_chirurgie pour faire fonctionner la requête-->
<?php
include("connexion_base.php");

// définition de la requête - les paramètres sont nommés ex : p_cen -
$req = $pdo->prepare('SELECT count(*) as nb FROM (tab_codage_chirurgie tcc INNER JOIN tab_chirurgie tc ON tcc.Code=tc.Code_chir) INNER JOIN tab_patient tp on tc.num_dossier=tp.num_dossier WHERE tcc.code = :p_code');
// exécution de la requête - les valeurs des paramètres sont données dans un tableau
$req->execute(array('p_code' => $_POST['chir']));
// Récupération des données de la requête ligne à ligne - dans ce cas, il n'y a qu'une ligne à extraire
$ligne = $req->fetch();
echo 'Il y a ', $ligne['nb'] ,' patients pour cette chirurgie. <br /><br />';
$req->closeCursor() ;
echo "<a href='donnees_patients_accueil.php'> Retour </a> ";

?>

<?php include "model/footer.php"; ?>

</body>