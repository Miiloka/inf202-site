<!-- Codé par Adrien -->

<?php include "model/debutpage.php"; ?>

<title>Fonctions des employés</title>

</head>

<body>

<?php include "model/navbar.php"; ?>

<div class="container">
    <h2>Rechercher par fonction</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="fonction">Fonction :</label>
            <select name="fonction" id="fonction" class="form-control">
                <?php
                // Requête pour récupérer les fonctions uniques
                $query = $pdo->query("SELECT DISTINCT fonction FROM tab_equipe_service");

                // Ajout des fonctions à la liste déroulante
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='{$row['fonction']}'>{$row['fonction']}</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" name="chercher" class="btn btn-primary">Chercher</button>
    </form>

    <?php
    // Si le formulaire a été soumis
    if (isset($_POST['chercher'])) {
        $fonctionChoisie = $_POST['fonction'];

        // Requête pour récupérer les employés qui ont la fonction choisie
        $stmt = $pdo->prepare("SELECT nom, prenom FROM tab_equipe_service WHERE fonction = :fonction");
        $stmt->execute(['fonction' => $fonctionChoisie]);

        // Affichage des résultats
        echo "<div><h3>Employés pour la fonction '{$fonctionChoisie}'</h3>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>{$row['nom']} {$row['prenom']}</p>";
        }
        echo "</div>";
    }
    ?>
</div>

<?php include "model/footer.php"; ?>

</body>
