<!-- Pour utiliser le CSS Bootstrap -->

<?php include "model/debutpage.php"; ?>

<title>Modele</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<form method ="POST" action="sel_pat_chir.php">
<input type="submit" name="ajout" value ="Nombre de patients par type de chirurgie"/>
</form>

<?php include "model/footer.php"; ?>

</body>