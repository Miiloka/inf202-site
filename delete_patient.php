
<?php include "model/debutpage.php"; ?>

<title>Connexion equipe</title>

<body>
<?php include "model/navbar.php"; ?>

<?php

// connexion  à la base de données
include("connexion_base.php");

// définition de la requête 
$req = $pdo->prepare('delete from tab_patient where pren= :p_pren and nom= :p_nom and num_dossier= :p_dossier');
// exécution de la requête

$req->execute(array('p_pren' => $_POST['prenom'] , 
							'p_nom' => $_POST['nom'] , 'p_dossier' => $_POST['dossier']));

// Récupération des données de la première ligne de la requête
$ligne = $req->fetch();

// Vérification du nombre de lignes affectées par la requête
if ($req->rowCount() > 0) {
  echo "Le patient a bien été sorti du service";
} else {
  echo "Ce patient n'est pas enregistré dans le service.";
  echo "<a href='delete_patient_form.php'> Retour </a> ";
}
?>


<?php include "model/footer.php"; ?>

</body>


