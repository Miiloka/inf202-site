<!-- Pour utiliser le CSS Bootstrap -->

<?php include "model/debutpage.php"; ?>

<title>Données de service</title>

</head>

<body>
<?php include "model/navbar.php"; ?>

<div style="display: flex; justify-content: center; align-items: center; ">
    <form method="POST" action="sel_pat_chir.php">
        <input type="submit" name="ajout" value="Nombre de patients par type de chirurgie" />
    </form>
</div>

<?php include "model/footer.php"; ?>

</body>