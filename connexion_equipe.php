<?php include "model/debutpage.php"; ?>

<title>Connexion équipe</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

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
   {   	echo '<p style="font-size: 18px; color:  #000000; font-weight: bold;width: 50vw; margin-left : 25vw;">Votre authentification est correcte.</p>';
		echo '<a href="donnees_patients_accueil.php" style="text-decoration: none; background-color: #77b5fe; color: white; padding: 10px 15px;border-radius: 30px; margin-top: 10px;width: 50vw; margin-left : 25vw;">Accéder aux données patients</a>';
		
   } else 	{ echo '<p style="font-size: 18px; color:  #000000; font-weight: bold;width: 50vw; margin-left : 25vw;">Mot de passe incorrect.</p>';
			
			echo '<a href="formulaire_co_equipe.php" style="text-decoration: none; background-color: #77b5fe; color: white; padding: 10px 15px;border-radius: 30px; margin-top: 10px;width: 50vw; margin-left : 25vw;">Nouvel essai</a>'; 
			}
 } else  { echo '<p style="font-size: 18px; color:  #000000; font-weight: bold;width: 50vw; margin-left : 25vw;">Identifiant inconnu.</p>';
		  echo '<a href="formulaire_co_equipe.php" style="text-decoration: none; background-color: #77b5fe; color: white; padding: 10px 15px;border-radius: 30px; margin-top: 10px;width: 50vw; margin-left : 25vw;">Nouvel essai</a>'; 
		};

?>


<?php include "model/footer.php"; ?>

</body>



