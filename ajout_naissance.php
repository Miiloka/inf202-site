<!-- Pour utiliser le CSS Bootstrap -->

<?php include "model/debutpage.php"; ?>

<title>Nouvelle naissance</title>

<style>
    .form-container {
        border: 1px solid #ddd;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        border-radius: 5px;
        max-width: 450px; /* Augmentation de la propriété max-width */
        width: 350px;
        margin: 0 auto; /* Centrer le formulaire horizontalement */
    }

    .form-naissance {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
    }

    .input-naissance[type=text], input[type=number], input[type=submit] {
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .input-naissance2[type=submit] {
        margin-top: 20px;
        cursor: pointer;
        background-color: #5cb85c;
        color: white;
        border: none;
    }

    

    .input-naissance3[type=submit]:hover {
        background-color: #007bff;
    }
</style>

</head>

<body>

<?php include "model/navbar.php"; ?>

<div class="form-container">
    <form class = "form-naissance" action="submit_birth.php" method="post">
        <label for="num_dossier">Numéro de dossier:</label>
        <input class = "input-naissance" type="number" id="num_dossier" name="num_dossier" required>
        
        <label for="annee_naissance">Année de naissance:</label>
        <input class = "input-naissance2" type="number" id="annee_naissance" name="annee_naissance" required>
        
        <input class = "submit-naissance3" type="submit" value="Rechercher">
    </form>
</div>

<?php include "model/footer.php"; ?>

</body>