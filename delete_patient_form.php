
<?php include "model/debutpage.php"; ?>


<body>

<?php include "model/navbar.php"; ?>

<?php
// connexion  à la base de données
include("connexion_base.php"); ?>

<html>

<body>

<br />
  <style>
       
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            justify-content: center;
            height: 10px;
			font-size:13px;
        }

        form {
            border: 2px solid #ccc;
            padding: 10px;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #77b5fe;
            color: white;
            cursor: pointer;
        }
    </style>

<div style="max-width: 500px;"> 
	<form method="POST" action="delete_patient.php" style=" width: 50vw; margin-left : 25vw;" >


	<fieldset><legend><h4> Supprimer un patient de la base informatique </h4></legend>
	<table>
	<tr> <td> Nom : </td><td><INPUT NAME="nom" TYPE="text"/> </td></tr>
	<tr><td> Prénom : </td><td><INPUT NAME="prenom" TYPE="text"/></td></tr>
	<tr><td> Numéro de dossier : </td><td><INPUT NAME="dossier" TYPE="text"/></td></tr>
	</table> 

	<input type="submit" name="bt1" value="Sortir le patient du service"/> <br />

	</fieldset> <br /> 
	</form>
	
</div>
</body>
</html>

<br />
<?php include "model/footer.php"; ?>

</body>