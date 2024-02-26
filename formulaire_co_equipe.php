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
        font-size: 13px;
    }

    .form-co {
        border: 2px solid #ccc;
        margin: auto; /* Centrer le formulaire horizontalement */
        padding: 10px;
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
        height: 100vh; /* Utiliser toute la hauteur de la fenêtre de visualisation */
    }
</style>

<div class="container-form">
    <form class="form-co" method="POST" action="connexion_equipe.php">
        <fieldset>
            <legend><h4> Espace professionnels de santé </h4></legend>
            <table>
                <tr>
                    <td><input class="input-co" name="utilisateur" type="text" placeholder="Utilisateur"/></td>
                </tr>
                <tr>
                    <td><input class="input-co" name="motpasse" type="password" placeholder="Mot de passe"/></td>
                </tr>
            </table>
            <input class="input-co" type="submit" name="bt1" value="Accéder à mon compte"/> <br />
        </fieldset> <br/>
    </form>
</div>

</body>

<?php include "model/footer.php"; ?>
