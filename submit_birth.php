<!-- Codé par Adrien -->

<?php
$message = '';
$script = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "model/debutpage.php";
    $num_dossier = $_POST["num_dossier"];
    $annee_naissance = $_POST["annee_naissance"];
    $currentYear = date("Y");

    // Validation du numéro de dossier
    if (!preg_match("/^[0-9]{6}$/", $num_dossier)) {
        $message = "<div class='error'>Erreur : Le numéro de dossier doit être un nombre à 6 chiffres.</div>";
        $script = "var seconds = 5; countdown();";
    } elseif ($annee_naissance > $currentYear) {
        $message = "<div class='error'>Erreur : L'année de naissance ne peut pas dépasser l'année actuelle.</div>";
        $script = "var seconds = 5; countdown();";
    } else {
        // Vérifier si le numéro de dossier existe
        $patientStmt = $pdo->prepare("SELECT 1 FROM tab_patient WHERE Num_Dossier = :num_dossier");
        $patientStmt->execute(['num_dossier' => $num_dossier]);
        if ($patientStmt->fetchColumn()) {
            try {
                $pdo->beginTransaction();

                $stmt = $pdo->prepare("SELECT MAX(Id_Grossesse) AS max_id FROM tab_grossesse WHERE Num_Dossier = :num_dossier");
                $stmt->execute(['num_dossier' => $num_dossier]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $id_grossesse = $result ? $result['max_id'] + 1 : 1;

                $insertStmt = $pdo->prepare("INSERT INTO tab_grossesse (Num_Dossier, Id_Grossesse, Annee) VALUES (:num_dossier, :id_grossesse, :annee_naissance)");
                $insertStmt->execute(['num_dossier' => $num_dossier, 'id_grossesse' => $id_grossesse, 'annee_naissance' => $annee_naissance]);

                $pdo->commit();
                $message = "<div class='success'>Naissance ajoutée avec succès pour le dossier $num_dossier.</div>";
                $script = "var seconds = 5; countdownSuccess();";
            } catch (Exception $e) {
                $pdo->rollBack();
                $message = "<div class='error'>" . $e->getMessage() . "</div>";
                $script = "var seconds = 5; countdown();";
            }
        } else {
            $message = "<div class='error'>Erreur : Numéro de dossier non trouvé dans la table des patients.</div>";
            $script = "var seconds = 5; countdown();";
        }
    }
} else {
    header("Location: ajout_naissance.php");
    exit;
}
?>

<title>Ajout de naissance</title>

<style>
    body.page-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Modifié pour aligner le contenu et le footer */
        min-height: 100vh;
        margin: 0;
    }

    .centered-message {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .form-birth {
        width: 400px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-top: 20px;
    }

    .error, .success {
        color: white;
        padding: 10px;
        border-radius: 5px;
        margin: 20px 0;
    }

    .error {
        background-color: #d9534f;
    }

    .success {
        background-color: #5cb85c;
    }
    
    .countdown {
        margin-top: 10px;
    }
</style>
</head>

<body>
<?php include "model/navbar.php"; ?>
<div class="body-wrapper">
    
    <div class="centered-message">
        <?= $message ?>
        <div class='countdown'>Redirection dans <span id='countdown'>5</span>...</div>
    </div>

    <script>
        function countdown() {
            var countdownElement = document.getElementById('countdown');
            if (countdownElement) {
                seconds--;
                countdownElement.textContent = seconds;
                if (seconds > 0) {
                    setTimeout(countdown, 1000);
                } else {
                    window.location.href = 'ajout_naissance.php';
                }
            }
        }

        function countdownSuccess() {
            var countdownElement = document.getElementById('countdown');
            if (countdownElement) {
                seconds--;
                countdownElement.textContent = seconds;
                if (seconds > 0) {
                    setTimeout(countdownSuccess, 1000);
                } else {
                    window.location.href = 'donnees_service.php';
                }
            }
        }

        <?= $script ?>
    </script>

</div>
<?php include "model/footer.php"; ?>