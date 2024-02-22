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

<form method ="POST" action="sel_pat_chir.php">
<input type="submit" name="chir" value ="Sélection des patients selon le type de chirurgie"/>
</form>

<?php include "model/footer.php"; ?>

</body>