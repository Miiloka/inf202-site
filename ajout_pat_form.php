<!-- codé par Anne-Andrée -->

<?php include "model/debutpage.php"; ?>

<title>Ajouter un patient</title>
<body>
<?php include "model/navbar.php"; ?>
<head>
<meta charset="utf-8" />	
</head>


<form method ="POST" action="ajout_pat_action.php">
<fieldset><legend><h4>Informations sur le patient</h4></legend>
<label> Nom :
<input name ="nom" type="text"/></label>
<label> Prénom :
<input name ="prenom" type="text"/></label>
<label> Numéro :
<input name ="num" type="text"/></label>
</fieldset>
<input type="submit" name="val" value ="Valider"/>

<!-- j'ai retiré le pied de page parce que lorsque je veux valider mon formulaire, ils m'obliger à entrer une adresse mail dans les news letters-->

<?php include "model/footer.php"; ?>

</body>