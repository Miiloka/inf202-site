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
</head>

<body>
<?php include "model/navbar.php"; ?>

<div class="container-formu">
    <h2>Choisissez une option</h2> <!-- Titre au-dessus du formulaire -->
    <form class = "formusite" action="" method="post">
        <select name="pageSelectionnee">
            <option value="fct_service.php">Nom et prénom des employés par fonction</option>
            <option value="sel_pat_chir.php">Nombre de patients par type de chirurgie</option>
        </select>
        <button type="submit" name="redirect">Aller à la page</button>
    </form>
</div>

<?php include "model/footer.php"; ?>

</body>
</html>
