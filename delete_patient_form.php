
<?php include "model/debutpage.php"; ?>

<title>Formulaire suppression patient</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<?php
// connexion  à la base de données
include("connexion_base.php"); ?>

<html>
	<head>
		<meta charset="utf-8" />	
		<title>Identification</title>
</head>
<body>

<form method="POST" action="delete_patient.php" style=" width: 50vw; margin-left : 25vw;" >


<fieldset><legend><h4> Supprimer un patient de la base informatique </h4></legend>
<table>
<tr> <td> Nom : </td><td><INPUT NAME="nom" TYPE="text"/> </td></tr>
<tr><td> Prénom : </td><td><INPUT NAME="prenom" TYPE="text"/></td></tr>
<tr><td> Numéro de dossier : </td><td><INPUT NAME="dossier" TYPE="text"/></td></tr>
</table> 

<input type="submit" name="bt1" value="Sortir le patient du service"/> <br />

</fieldset> <br /> 
</form>
</body>
</html>


<?php include "model/footer.php"; ?>

</body>