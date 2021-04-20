<?php

/**
 * Copyright (c) 4.20.2021.
 * Created by Gottfried Stoll
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!--Responsiveness-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="../img/favicon/safari-pinned-tab.svg" color="#f40032">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/download-style.css">

    <!--Title-->
    <title>GUP - Download</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.php">
                <img class="logo" src="../img/logo/logo.jpg" alt="logo">
            </a>
            <span id="logo-text">
                Gogo's Ultimate Pac-Man
            </span>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            Home

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutme.php">
                            About Me
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            Download
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <main>
        <div class="fixed-bg fixed-pic1">
            <h1>Download GUP</h1>

            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                <button type="submit" id="download" name="submit">
                    Spiel Herunterladen (Nur für PC)
                </button>
                <?php if (isset($_POST['submit'])) : ?>
                    <div id="warning">
                        <h3>Sind Sie sicher, dass Sie das Spiel herunterladen wollen?</h3>
                        <a href="../GUP.zip" download="GUP_Program" onclick="alertFunction()">Ja</a>
                        <button type="submit" name="no">
                            Nein
                        </button>

                    </div>
                <?php endif; ?>
                <script>
                    function alertFunction() {
                        open("success.php");
                    }
                </script>

            </form>

        </div>
    </main>
    <footer>
        <div class="card text-center">
            <div class="card-header">
                Gogo's Ultimate Pac-Man
            </div>
            <div class="card-footer text-muted">
                This website was created by © Gottfried Stoll,
                all rights reserved. <a href="./impressum.php">Impressum</a> <a href="./datenschutz.php">Datenschutzerklärung</a>
            </div>
        </div>
    </footer>
</body>

</html>