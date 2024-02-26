<!-- Codé par Adrien -->

<?php
$message = '';
$script = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "model/debutpage.php"; // Assurez-vous que cette inclusion initialise la connexion à la base de données avec $pdo
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
        // Ici, placez votre logique pour vérifier l'existence du numéro de dossier, et l'insertion de la nouvelle naissance
        // Si tout se passe bien
        $message = "<div class='success'>Naissance ajoutée avec succès pour le dossier $num_dossier.</div>";
        $script = "var seconds = 5; countdownSuccess();";
        // En cas d'erreur dans cette logique, ajustez $message et $script comme ci-dessus
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

<?php include "model/footer.php"; ?>