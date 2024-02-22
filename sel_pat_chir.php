<!-- codé par Anne-Andrée -->

<?php include "model/debutpage.php"; ?>

<title>Sélection des patients selon le type de chirurgie</title>
<body>
<?php include "model/navbar.php"; ?>
<head>
<meta charset="utf-8" />	
</head>

<form method ="POST" action="spc_action.php">
<fieldset><legend><h4>Sélectionnés un type de chirurgie</h4></legend>
<label> Chirurgie : <select name="chir">
				<option value="1">UV thérapie (CXL)</option>
				<option value="2">Anneaux Intra Cornéens (AIC)</option>
				<option value="3">UV thérapie + Anneaux Intra cornéens (CXL et AIC)</option>
				<option value="4">Greffe transfixiante (KT)</option>
				<option value="5">Keratoplastie lamellaire antérieure profonde (KLAP)</option>
				<option value="6">Incisions relaxantes</option>
				<option value="7">Autre</option>
			   </select> </label> <br />
</fieldset>
<input type="submit" name="val" value ="Valider"/>

<!-- j'ai retiré le pied de page parce que lorsque je veux valider mon formulaire, ils m'obliger à entrer une adresse mail dans les news letters-->

</body>