<!-- Pour utiliser le CSS Bootstrap -->

<?php include "model/debutpage.php"; ?>

<title>Connexion equipe</title>

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

// définition de la requête - les paramètres sont identifiés ; on n'a pas besoin de gérer les guillemets -
$req = $pdo->prepare('select mdp from tab_equipe_service where user= :p_user');
// exécution de la requête - les valeurs des paramètres sont données dans un tableau
$req->execute(array('p_user' => $_POST['utilisateur']));

// Récupération des données de la première ligne de la requête
$ligne = $req->fetch();

if ($ligne)  
{
 if ($ligne['mdp']==$_POST['motpasse']) 
   {   	echo "Bonjour ",$_POST['utilisateur']," ! Votre authentification est correcte. <br /> \n";
		echo "<a href='donnees_patients_accueil.php'> Accéder aux données des patients </a> ";
		
   } else 	{ echo "Attention ",$_POST['utilisateur']," ! <br /> \n";
			echo "Erreur de mot de passe <br /> ";
			echo "<a href='formulaire_co_equipe.php'> Nouvel Essai </a> "; 
			}
 } else  { echo "Utilisateur inconnu <br /> ";
		  echo "<a href='formulaire_co_equipe.php'> Nouvel Essai </a> "; 
		};

?>
</body>


<?php include "model/footer.php"; ?>

</body>