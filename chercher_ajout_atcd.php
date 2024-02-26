<?php include "model/debutpage.php"; ?>

<title>Chercher et ajout patient</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<form method = "POST" action="atcd_pers_pat.php">
	<h4> Chercher les antécédents personnels d'un patient </h4>
	<tr> <td> Numéro de dossier : </td><td><INPUT NAME="num_dossier" TYPE="text"/> </td></tr></br>
<input type ="submit" name="cherche_atcd_pers" value = "Chercher les antécédents personnels d'un patient"/>
</form>
</br>

<form method = "POST" action="ajout_atcd_pers.php">

	<fieldset><h4> Ajouter un antécédent personnel a un patient </h4>
	<tr> <td> Numéro de dossier : </td><td><INPUT NAME="num_dossier" TYPE="text"/> </td></tr></br>
	<tr> <td> Catégorie de l'antécédent : </td><td><INPUT NAME="Categorie_atcd" TYPE="text"/> </td></tr></br>
	<tr> <td> Traitement actuel : </td><td><INPUT NAME="Traitement_act" TYPE="text"/> </td></tr></br>
	<tr> <td> Traitement passé : </td><td><INPUT NAME="Traitement_passe" TYPE="text"/> </td></tr></br>
	</fieldset>
<input type ="submit" name="ajout_atcd_pers" value = "Ajouter un antécédent personnel a un patient"/>
</form>
</br>


<form method ="POST" action="sel_pat_chir.php">
<h4> Sélectionner un patient selon le type de chirurgie </h4>
<input type="submit" name="chir" value ="Sélection des patients selon le type de chirurgie"/>
</form>

<?php include "model/footer.php"; ?>
</body>