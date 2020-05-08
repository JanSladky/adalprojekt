
<?php include 'partials/arrays.php' ?>
<?php include '_inc/config.php' ?>
<!-- <?php
        $page_name = basename($_SERVER['SCRIPT_NAME'], '.php');


        ?> -->
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
    <title><?php echo ucfirst($page_name) ?> / A dál?</title>
    <meta name="description" content="Stránky spolku A dál?">
    <meta name="googlebot" content="Stránky spolku A dál?">
    <meta name="Keywords" content="A dál?, adalprojekt, komunitní akce, komunitní setkání, Žatec, Ústecký kraj, Žatecký spolek, žijme Žatec společně, Žatci, Žatecko
        " />
    <meta name="robots" content="all" lang="cs">

    <link rel="apple-touch-icon" href="assets/image/apple-touch-icon.png">
    <link rel="stylesheet" href="../assets/CSS/jquery/lightbox.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/normalize.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <meta name="viewport" , content="width=device=width, initial-scale=1, maximum-scale=1.5">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto menu navigation">
                    <?php include 'partials/nav.php' ?>




                   <!-- PŮVODNÍ NAVBAR-->
                    <!-- <?php
                    $sites = ['home', 'pripravovane', 'projekty', 'spoluporadane', 'kalendar', 'media', 'blog'];
                    $sorted = array_keys(array_merge(array_flip(['home']), array_flip($sites)));

                    foreach ($sites as $site) {
                        if ($site === 'home') {
                            echo ('<li><a href="index.php">Domů</a></li>');
                        } else {
                            echo ('<li><a href="' . $site . '.php">' . ucfirst($site) . '</a></li>');
                        }
                    }

                    ?> -->

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


            </div>
        </nav>





        </div>
    </header>
    <section>