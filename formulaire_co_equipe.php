<!-- Pour utiliser le CSS Bootstrap -->

<?php include "model/debutpage.php"; ?>


<body>

<?php include "model/navbar.php"; ?>
<html>
	<head>
		<meta charset="utf-8" />	
		<title>Identification</title>
</head>
<body>

<form method="POST" action="connexion_equipe.php" style=" width: 50vw; margin-left : 25vw;" >


<fieldset><legend><h4> Identification du personnel de service </h4></legend>
<table>
<tr> <td> Utilisateur : </td><td><INPUT NAME="utilisateur" TYPE="text"/> </td></tr>
<tr><td> Mot de passe : </td><td><INPUT NAME="motpasse" TYPE="password"/></td></tr>
</table> 

<input type="submit" name="bt1" value="Accéder à mon compte"/> <br />

</fieldset> <br /> 
</form>
</body>
</html>

<?php include "model/footer.php"; ?>

</body>

