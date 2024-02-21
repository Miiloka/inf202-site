
<?php include "model/debutpage.php"; ?>

<title>Connexion equipe</title>

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
$req = $pdo->prepare('delete from tab_patient where pren= :p_pren and nom= :p_nom and num_dossier= :p_dossier');
// exécution de la requête 
$req->execute(array('p_pren' => $_POST['prenom'] , 
							'p_nom' => $_POST['nom'] , 'p_dossier' => $_POST['dossier']));

// Récupération des données de la première ligne de la requête
$ligne = $req->fetch();

if ($ligne)  
{
 if ($ligne['pren']==$_POST['prenom'] and $ligne['nom']==$_POST['nom'] and $ligne['num_dossier']==$_POST['dossier'] ) 
   {   	echo "Le patient a bien été sorti du service <br /> \n";
		
   } else 	{ echo "Ce patient n'est pas enregistré dans le service. <br /> \n";
   echo "<a href='delete_patient_form.php'> Retour </a> ";
   }
}
?>
</body>


<?php include "model/footer.php"; ?>

</body>