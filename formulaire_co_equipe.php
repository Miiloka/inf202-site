<!-- Pour utiliser le CSS Bootstrap -->

<?php include "model/debutpage.php"; ?>


		<title>Identification</title>

<?php include "model/navbar.php"; ?>
  <style>
       
        body {
            font-family: Roboto;
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


<div style="max-width: 500px; margin:2em;"> 
  
	<form method="POST" action="connexion_equipe.php" style=" width: 50vw; margin-left : 25vw;" >
	
		<fieldset><legend><h4> Espace professionnels de santé </h4></legend>
		<table>
		<tr> <td> Utilisateur : </td><td><INPUT NAME="utilisateur" TYPE="text"/> </td></tr>
		<tr><td> Mot de passe : </td><td><INPUT NAME="motpasse" TYPE="password"/></td></tr>
		</table> 

		<input type="submit" name="bt1" value="Accéder à mon compte"/> <br />

		</fieldset> <br /> 
		</form>
</div>

</body>


<?php include "model/footer.php"; ?>



