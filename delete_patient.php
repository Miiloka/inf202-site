
<?php include "model/debutpage.php"; ?>


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
  echo '<p style="font-size: 18px; color:  #000000; font-weight: bold;width: 50vw; margin-left : 25vw;">Le patient ayant comme numéro de dossier : '.htmlspecialchars($_POST["dossier"]).' est bien supprimé de la base informatique du service</p>';
} else {
  echo "<p style='font-size: 18px; color:  #000000; font-weight: bold;width: 50vw; margin-left : 25vw;'>Ce patient n'est pas référencé dans le service.</p>";
  echo '<a href="delete_patient_form.php" style="text-decoration: none; background-color: #77b5fe; color: white; padding: 10px 15px;border-radius: 30px; margin-top: 10px;width: 50vw; margin-left : 25vw;">Nouvel essai</a>';
}
?>


<?php include "model/footer.php"; ?>

</body>


