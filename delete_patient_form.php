<!-- Codé par Léa -->
<?php include "model/debutpage.php"; ?>


<body>

<?php include "model/navbar.php"; ?>

<?php
// connexion  à la base de données
include("connexion_base.php"); ?>

<html>

<body>


  <style>
    .form-co {
        border: 2px solid #ccc;
        margin: auto; /* Centrer le formulaire horizontalement */
        padding: 15px;
        border-radius: 8px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .input-co {
        width: 300px; /* Largeur fixe plus petite pour les inputs */
        padding: 8px;
        margin: 10px auto; /* Ajout pour centrer */
        display: block; /* Permet de centrer l'élément */
        box-sizing: border-box;
    }

    .input-co[type="submit"] {
        background-color: #77b5fe;
        color: white;
        cursor: pointer;
        display: block; /* Ajout pour centrer le bouton */
        margin: 0 auto; /* Ajout pour centrer le bouton */
    }

    ::placeholder {
        color: rgba(128, 128, 128, 0.9); /* Gris avec une transparence */
        font-size: 12px; /* Augmenter la taille du texte du placeholder */
    }

    .container-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 45vh; /* Utiliser toute la hauteur de la fenêtre de visualisation */
        font-family: Roboto;
        background-color: #f4f4f4;
        justify-content: center;
        
        font-size: 13px;
    }
</style>

<div class="container-form" style="background-color: rgba(244, 244, 244, 0.0);"> 
	<form class="form-co" method="POST" action="delete_patient.php" >


	<fieldset><legend><h4> Supprimer un patient de la base informatique </h4></legend>
	<table>
	<tr> <td> Nom : </td><td><INPUT class="input-co" name="nom" type="text"/> </td></tr>
	<tr><td> Prénom : </td><td><INPUT class="input-co" name="prenom" type="text"/></td></tr>
	<tr><td> Numéro de dossier : </td><td><INPUT class="input-co" name="dossier" type="text"/></td></tr>
	</table> 

	<input class="input-co" type="submit" name="bt1" value="Sortir le patient du service"/> <br />

	</fieldset> <br /> 
	</form>
	
</div>
</body>
</html>

<br />
<?php include "model/footer.php"; ?>

</body>