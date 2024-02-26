<!-- Codé par Maud -->
<?php
include "model/debutpage.php";
?>

<title>Ajout d'antécédants personnels</title>

</head>

<body>

<?php
include "model/navbar.php";

// Connexion à la base de données
include("connexion_base.php");

//Préparation requête
 $req = $pdo->prepare('INSERT INTO tab_atcdperso (Num_dossier, Categorie_atcd, Traitement_act, Traitement_passe) VALUES (:num_user, :cat_atcd, :trt_act, :trt_passe)');

// Exécution de la requête
    $req->execute(array(
        'num_user' => $_POST['num_dossier'],
        'cat_atcd' => $_POST['Categorie_atcd'],
        'trt_act' => $_POST['Traitement_act'],
        'trt_passe' => $_POST['Traitement_passe']
    ));
 // Vérification du succès de l'opération
    if ($req) {
        echo "Antécédent ajouté avec succès.";
    } 
    else {
        echo "Erreur lors de l'ajout de l'antécédent.";
    }

?>

<?php include "model/footer.php"; ?>

</body>
