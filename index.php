<?php
$db = new PDO('mysql:host=localhost;dbname=auto4u',
    "root" . "");
$query = $db->prepare("select * FROM cards");
$query->execute();
$autos = $query->fetchAll(PDO::FETCH_ASSOC);?>

<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Auto4U</title>
</head>
<body class="bg-dark">
<!--header-->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary" style="background: rgb(0,0,0);
background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(255,255,255,1) 100%);">
    <div class="container-fluid">
        <a href="index.php">
        <img class="wheel" src="img/wheel.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="Catogorien.php">Catogoriën</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="huren.php">Huren</a>
                </li>
                <li class="nav-item me-auto">
                    <a class="nav-link text-dark" style="margin-left: 1450px" href="login.php">Login</a>
                </li>
                <li class="nav-item me-auto">
                    <a class="nav-link text-dark" href="register.php">Registeer</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div><img src="img/header.jpg" class="w-100" style="height: 150px; object-fit: cover;"></div>
<!--header-->
<div class="d-flex justify-content-center">
    <div>
        <h1 class="pt-2">Goedemiddag, welkom bij Auto4u</h1>
        <i class="d-flex justify-content-center fw-bold fst-normal text-secondary">Goeden<?php $datum = date("H");

            if ($datum > 6 && $datum < 12) {
                echo "ochtend";
            }
            elseif ($datum > 12 && $datum < 18) {
                echo "middag";
            }
            elseif ($datum > 18 && $datum < 24) {
                echo "avond";
            }
            elseif ($datum > 24 || $datum < 6) {
                echo "nacht";
            } ?> de datum van vandaag is: <?php
            $datum = date('d-m-Y H:i');
            echo $datum
            ?></i></p>
    </div>
</div>
<div class="container pb-3">
    <div class="row d-flex justify-content-center">
        <div class="container pb-3">
            <div class="row d-flex justify-content-center">
                <?php foreach ($autos as $auto) {
                    echo "<div class='card w-25 px-2 bg-secondary' style='margin: 5px'>";
                    echo  $auto["name"] .'<img src="'.$auto['img'].'">' . "<br><br>" . "
                    " . $auto["beschrijving"];
                    echo '</div>';
                    echo "<br>";}?>
            </div>
    </div>
</div>
</body>
</html>
