<?php

require_once 'vendor/autoload.php';

session_start();

use Project3\Play;
use Project3\Game;


if(isset($_SESSION['play'])){
    $play = $_SESSION['play'];
}
?>
<!doctype HTML>
<html lang="nl" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wakken, Ijsberen en Pinguins</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        main > .container {
            padding: 60px 15px 0;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
<body class="d-flex flex-column h-100">

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Fixed navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Wakken en Ijsberen</h1>
    </div>
</main>

<?php

if(isset($_POST['dice'])){
    $game = new Game($_POST['dice']);
    $play->addGame($game);
}
elseif(isset($_POST['name'])){
    $play->setPlayerName($_POST['name']);
?>
<form action="" method="post">
    <div class="mb-3">
        <label for="exampleInputDice" class="form-label">Hoeveel dobbelstenen?</label>
        <input type="number" min="3" max="8" class="form-control" id="exampleInputDice" name="dice">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}elseif(isset($_POST['start'])) {
    $play = new Play();
    $_SESSION['play'] = $play;
    ?>
    <form action="" method="post">

        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php
}else{
    ?>
    <form action="" method="post">
        <button type="submit" class="btn btn-primary" name="start">Start Spel</button>
    </form>
<?php
}
echo '<pre>';
var_dump($play);
exit();
?>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
</body>
</html>
