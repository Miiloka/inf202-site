
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

// définition de la requête 
$req = $pdo->prepare('select mdp from tab_equipe_service where user= :p_user');
// exécution de la requête 
$req->execute(array('p_user' => $_POST['utilisateur']));

// Récupération des
$ligne = $req->fetch();

if ($ligne)  
{
 if ($ligne['mdp']==$_POST['motpasse']) 
   {   	echo '<p style="font-size: 18px; color:  #000000; font-weight: bold;">Votre authentification est correcte.</p>';
		echo '<a href="formulaire_co_equipe.php" style="text-decoration: none; background-color: #77b5fe; color: white; padding: 10px 15px; border-radius: 30px; margin-top: 10px;">Accéder aux données patients</a>';;
		
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



