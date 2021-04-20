<!--
  ~ Copyright (c) 4.20.2021.
  ~ Created by Gottfried Stoll
  -->

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!--Responsiveness-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">

    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#f40032">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/aboutme-style.css">

    <!--Title-->
    <title>GUP - About Me</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">
            <img class="logo" src="./img/logo/logo.jpg" alt="logo">
        </a>
        <span id="logo-text">
                Gogo's Ultimate Pac-Man
        </span>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">
                        Home
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        About Me
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./download.php">
                        Download
                    </a>
                </li>
            </ul>
        </div>

    </nav>
</header>
<main>
    <div class="fixed-bg">
        <h1>About Me</h1>
    </div>
    <div class="d-flex bd-highlight">
        <div class="p-2 flex-shrink-1 bd-highlight">
            <img src="./img/me.jpg" id="picofme" alt="Me">
        </div>
        <div class="p-2 w-100 bd-highlight">
            <p>
                Hallo!<br>Mein Name ist Gottfried Stoll und ich bin Informatiker
                im ersten Lehrjahr. Meine Firma heisst Zürcher Lehrbetriebsverband ICT (ZLI). <br>Ab August 2019
                werde ich jedoch
                bei der Sevitec AG arbeiten um dort meine 4-jährige Lehre als Applikationsentwickler zu absolvieren.
                <br>Ich wollte unbedingt mal ein Spiel programmieren,
                und da Pac-Man ein Klassiker ist, und mir ausserdem noch gefällt, wollte
                ich es mal <br>selber ausprobieren. Ich hoffe dass es Ihnen gefällt, <br>denn ich habe
                mir sehr viel Mühe gegeben.
            </p>
        </div>


    </div>


    <div class="align-self-baseline">
        <p>
            Wenn Sie zurück auf die Home-Page wollen, können Sie dies in dem Sie entweder, auf das Logo klicken,<br>
            oder einfach auf Home klicken. Wenn Sie das Spiel herunterladen wollen, gehen Sie auf die
            Download-Seite<br>
            dort werden Sie dann weitergeführt.
        </p>
    </div>
</main>
<footer>
    <div class="card text-center">

        <div class="card-header">
            Gogo's Ultimate Pac-Man
        </div>
        <div class="card-footer text-muted">
            This website has no intention to harass no one, in no form. This website was created by © Gottfried Stoll,
            all rights reserved.
        </div>
    </div>
</footer>
</body>
</html>