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

$req = $pdo->prepare('SELECT tp.num_dossier, tp.nom, tp.pren FROM (tab_codage_chirurgie tcc INNER JOIN tab_chirurgie tc ON tcc.Code=tc.Code_chir) INNER JOIN tab_patient tp on tc.num_dossier=tp.num_dossier WHERE tcc.code = :p_code');
$req->execute(array('p_code' => $_POST['chir']));
echo '<table>';

$i=1; // cette variable indique le type de ligne à afficher : 1=ligne impaire, -1=ligne paire
$res=$req->fetchAll();

foreach ($res as $ligne)
   {  //ajouter une ligne dans le tableau
   	  if ($i==1) //début de ligne : ligne impaire
		{ echo '<tr class="grisclair">';
		} else //début de ligne : ligne paire
		{ echo '<tr class="grisfonce">';
		}
		// affichage des valeurs des 3 champs ramenés par la requête pour la ligne en cours, chacun dans une cellule de cette ligne	
	  for ($k=0;$k<=2;$k++)
			{
			echo '<td>',$ligne[$k], '</td>';
			}
			// fin de ligne
	  echo "</tr> \n" ;
	  $i=$i*(-1);	//pour changer de type de ligne à chaque passage dans la boucle, les valeurs de $i sont alternativement 1 et -1
	}
echo "<a href='donnees_patients_accueil.php'> Retour </a> ";


?>

<?php include "model/footer.php"; ?>

</body>