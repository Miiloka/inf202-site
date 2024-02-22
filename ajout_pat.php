<!-- codé par Anne-Andrée -->

<?php include "model/debutpage.php"; ?>

<title>Ajout de patients</title>
<body>
<?php include "model/navbar.php"; ?>
<head>
<meta charset="utf-8" />	
</head>


<form method ="POST" action="ajout_pat_suite.php">
<fieldset><legend><h4>Informations sur le patient</h4></legend>
<label> Nom :
<input name ="nom" type="text"/></label>
<label> Prénom :
<input name ="prenom" type="text"/></label>
<label> Numéro :
<input name ="num" type="text"/></label>
</fieldset>
<input type="submit" name="val" value ="Valider"/>

<!-- à mettre dans une autre feuille -->



</body>