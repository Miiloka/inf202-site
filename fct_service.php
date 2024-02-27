<!-- Codé par Adrien -->

<?php include "model/debutpage.php"; ?>

<title>Fonctions des employés</title>

<style>
.table-no-border {
    border-spacing: 5em;
    width:80%;
    background-color: transparent;
    margin: 20px auto;
}

.table-no-border tbody tr {
  padding: 10px; 
}

.table-no-border thead {
    background-color: #ddd;
    text-align: center;
}

.container-tableaunom {
    text-align: center;
}

</style>

</head>

<body>

<?php include "model/navbar.php"; ?>

<div class="container">
    <h2>Rechercher par fonction</h2>
    <form action="" method="post">
        <div class="form-group">
            <select name="fonction" id="fonction" class="form-control">
                <?php
                // Requête pour récupérer les fonctions uniques
                $query = $pdo->query("SELECT DISTINCT fonction FROM tab_equipe_service");

                // Ajout des fonctions à la liste déroulante
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $fonction = htmlspecialchars($row['fonction'], ENT_QUOTES);
                    echo "<option value='$fonction'>$fonction</option>";
                }
                ?>
            </select>
        </div>
        <div style="margin-top: 10px;"></div>
        <button type="submit" name="chercher" class="btn btn-primary">Chercher</button>
    </form>

    <br>

    <?php
    // Si le formulaire a été soumis
    if (isset($_POST['chercher'])) {
        $fonctionChoisie = $_POST['fonction'];

        // Requête pour récupérer les employés qui ont la fonction choisie
        $stmt = $pdo->prepare("SELECT nom, prenom FROM tab_equipe_service WHERE fonction = :fonction");
        $stmt->execute(['fonction' => $fonctionChoisie]);

        // Affichage des résultats dans une table
        echo "<div class = 'container-tableaunom'>";
        echo "<h3> Employés pour la fonction '$fonctionChoisie' </h3><br>";
        echo "<table class='table-no-border' style='border-bottom-color: black; border-collapse: collapse";
        echo "<thead class='thead-dark'>";
        echo "<tr><th>Nom</th><th>Prénom</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            echo "<tr><td>$nom</td><td>$prenom</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
    ?>
    
</div>

<?php include "model/footer.php"; ?>

</body>
