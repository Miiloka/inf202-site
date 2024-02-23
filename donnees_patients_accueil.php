

<?php include "model/debutpage.php"; ?>

<title>Modele</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<form method ="POST" action="delete_patient_form.php">
<input type="submit" name="ajout" value ="Supprimer un patient"/>
</form>

<form method ="POST" action="ajout_pat.php">
<input type="submit" name="ajout" value ="Ajouter un patient"/>
</form>

<form method = "POST" action="atcd_pers_pat.php">
	<fieldset><h4> Chercher les antécédants personnels d'un patient </h4>
	<table>
	<tr> <td> Numéro de dossier : </td><td><INPUT NAME="num_dossier" TYPE="text"/> </td></tr>
	</fieldset>
<input type ="submit" name="cherche_atcd_pers" value = "Chercher les antécédants personnels d'un patient"/>
</form>

<form method = "POST" action="ajout_atcd_pers.php">
	<fieldset><h4> Ajouter un antécédant personnel a un patient </h4>
	<table>
	<tr> <td> Numéro de dossier : </td><td><INPUT NAME="num_dossier" TYPE="text"/> </td></tr>
	<tr> <td> Catégorie de l'antécédant : </td><td><INPUT NAME="Categorie_atcd" TYPE="text"/> </td></tr>
	<tr> <td> Traitement actuel : </td><td><INPUT NAME="Traitement_act" TYPE="text"/> </td></tr>
	<tr> <td> Traitement passé : </td><td><INPUT NAME="Traitement_passe" TYPE="text"/> </td></tr>
	</fieldset>
<input type ="submit" name="ajout_atcd_pers" value = "Ajouter un antécédant personnel a un patient"/>
</form>

<?php include "model/footer.php"; ?>

</body>