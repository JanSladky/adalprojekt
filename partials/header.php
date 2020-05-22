<?php include 'config.php' ?>
<?php include 'arrays.php' ?>

<!-- VYPSÁNÍ NA JAKÉ PODSTRÁNCE JSEM-->
<?php

    $page_name = basename($_SERVER['SCRIPT_NAME'], '.php');

    if ($page_name == 'index') $page_name = 'domů';
    if ($page_name == 'pripravovane') $page_name = 'připravované';
    if ($page_name == 'spoluporadane') $page_name = 'spolupořádané';
    if ($page_name == 'kalendar') $page_name = 'kalendář';
    if ($page_name == 'media') $page_name = 'média';

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149756839-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-149756839-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $page_name ?> / A dál?</title>
    <meta name="description" content="Stránky spolku A dál?">
    <meta name="googlebot" content="Stránky spolku A dál?">
    <meta name="Keywords" content="A dál?, adalprojekt, komunitní akce, komunitní setkání, Žatec, Ústecký kraj, Žatecký spolek, žijme Žatec společně, Žatci, Žatecko
    " />
    <meta name="robots" content="all" lang="cs">

    <link rel="apple-touch-icon" href="../assets/image/apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/CSS/jquery/lightbox.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/CSS/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/CSS/style.css">
    <meta name="viewport" , content="width=device=width, initial-scale=1, maximum-scale=1.5">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">

                <ul class="navbar-nav mr-auto menu navigation">
                    <?php include 'nav.php' ?>
                </ul>

            </div>
            <!-- social icons -->

            <div class="social-icon-container">
                <div class="social-icon">
                    <a href="https://www.facebook.com/adalprojekt/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/adalprojekt/?hl=cs" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube" target="_blank"></i></a>
                </div>
            </div>
        </nav>
    </header>
    <section>