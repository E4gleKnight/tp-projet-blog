<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo $pageTitle ?>

    </title>
    <!--Chargement du CSS de Bootstrap-->
    <link rel="stylesheet" href="dependencies/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dependencies/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
</head>
<body class="container-fluid">


<?php if (isset($_SESSION["flash"])):?>
    <div class="row">
        <div class="col-md-6 col-md-offset-2 alert alert-info">
            <?php
            //affichage du message
            echo $_SESSION["flash"];
            //suppression du message
            unset($_SESSION["flash"]);
            ?>
        </div>
    </div>
<?php endif; ?>
<!--Contenu de l'application-->
<section class="row">
    <div class="col-md-8 col-md-offset-2">
        <?php echo $content ?>
    </div>
</section>

<script src="dependencies/jquery/dist/jquery.min.js"></script>
<script src="dependencies/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>