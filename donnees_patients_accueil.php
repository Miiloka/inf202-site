<!-- Codé par le groupe -->
<?php include "model/debutpage.php";

// Vérifier si le formulaire a été soumis
if (isset($_POST['redirect'])) {
    // Rediriger l'utilisateur vers la page sélectionnée
    $pageSelectionnee = $_POST['pageSelectionnee'];
    header("Location: $pageSelectionnee");
    exit; // Arrêter l'exécution du script après la redirection
} 
?>

<style>
        /* Augmenter la taille de la police pour le formulaire */
        formusite {
            font-size: 1.2em; /* Taille de la police augmentée */
        }
        /* Espacement autour du titre et du formulaire */
        .container-formu {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px; /* Espacement entre les éléments */
        }
    </style>


<body>
<?php include "model/navbar.php"; ?>

<div class="container-formu">
    <h2>Choisissez une fonctionnalité</h2> <!-- Titre au-dessus du formulaire -->
    <form class = "formusite" action="" method="post">
        <select name="pageSelectionnee">
            <option value="ajout_pat_form.php">Ajouter un patient au service</option>
            <option value="delete_patient_form.php">Supprimer un patient du service</option>
			<option value="chercher_ajout_atcd.php">Chercher ou ajouter un antécédent à un patient</option>
            <option value="ajout_naissance.php">Ajouter une nouvelle naissance</option>
			
        </select>
        <button type="submit" name="redirect">Accéder à la fonctionnalité</button>
    </form>
</div>

<?php include "model/footer.php"; ?>

</body>
