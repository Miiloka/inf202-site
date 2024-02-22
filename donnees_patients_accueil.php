

<?php include "model/debutpage.php"; ?>

<title>Modele</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<?php
echo "Mettre les titres des formulaires quon va faire relatifs aux donnees des patients, et redirigeant vers le formulaire créer <br /> \n"; 
echo "Pour sortir un patient du service : <a href='delete_patient_form.php'> Cliquer ici </a>"?>

<form method ="POST" action="ajout_pat.php">
<input type="submit" name="ajout" value ="Ajouter un patient"/>
</form>

<?php include "model/footer.php"; ?>

</body>