<?php include "model/debutpage.php"; ?>

<title>Modele</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<form method ="POST" action="delete_patient_form.php">
<input type="submit" name="supp" value ="Supprimer un patient"/>
</form>

<form method ="POST" action="ajout_pat_form.php">
<input type="submit" name="ajout" value ="Ajouter un patient"/>
</form>

<<<<<<< HEAD

<form method = "POST" action="atcd_pers_pat.php">
	<h4> Chercher les antécédants personnels d'un patient </h4>
	<tr> <td> Numéro de dossier : </td><td><INPUT NAME="num_dossier" TYPE="text"/> </td></tr></br>
<input type ="submit" name="cherche_atcd_pers" value = "Chercher les antécédants personnels d'un patient"/>
=======
<form method = "POST" action="atcd_pers_pat.php">
	<fieldset><h4> Chercher les antécédents personnels d'un patient </h4>
	<table>
	<tr> <td> Numéro de dossier : </td><td><INPUT NAME="num_dossier" TYPE="text"/> </td></tr>
	</fieldset>
<input type ="submit" name="cherche_atcd_pers" value = "Chercher les antécédents personnels d'un patient"/>
>>>>>>> 0eabd02adfbfca62e7e8d7a1b3aec6b65f084dd4
</form>


<form method = "POST" action="ajout_atcd_pers.php">
<<<<<<< HEAD
	<fieldset><h4> Ajouter un antécédant personnel a un patient </h4>
	<tr> <td> Numéro de dossier : </td><td><INPUT NAME="num_dossier" TYPE="text"/> </td></tr></br>
	<tr> <td> Catégorie de l'antécédant : </td><td><INPUT NAME="Categorie_atcd" TYPE="text"/> </td></tr></br>
	<tr> <td> Traitement actuel : </td><td><INPUT NAME="Traitement_act" TYPE="text"/> </td></tr></br>
	<tr> <td> Traitement passé : </td><td><INPUT NAME="Traitement_passe" TYPE="text"/> </td></tr></br>
	</fieldset>
<input type ="submit" name="ajout_atcd_pers" value = "Ajouter un antécédant personnel a un patient"/>
</form>


=======
	<fieldset><h4> Ajouter un antécédent personnel a un patient </h4>
	<tr> <td> Numéro de dossier : </td><td><INPUT NAME="num_dossier" TYPE="text"/> </td></tr>
	<tr> <td> Catégorie de l'antécédent : </td><td><INPUT NAME="Categorie_atcd" TYPE="text"/> </td></tr>
	<tr> <td> Traitement actuel : </td><td><INPUT NAME="Traitement_act" TYPE="text"/> </td></tr>
	<tr> <td> Traitement passé : </td><td><INPUT NAME="Traitement_passe" TYPE="text"/> </td></tr>
	</fieldset>
<input type ="submit" name="ajout_atcd_pers" value = "Ajouter un antécédent personnel a un patient"/>
>>>>>>> 0eabd02adfbfca62e7e8d7a1b3aec6b65f084dd4
<form method ="POST" action="sel_pat_chir.php">
<input type="submit" name="chir" value ="Sélection des patients selon le type de chirurgie"/>
</form>

<?php include "model/footer.php"; ?>

</body>