<?php
include ('core/db_connect.php');

$paginatitel = 'Home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $paginatitel ?> - FruitFish</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/homepage.css">
    <link rel="stylesheet" href="../assets/css/overzicht.css">
    <link rel="stylesheet" href="../assets/css/detailpage.css">

    <link rel="icon" href="assets/img/iconen/fandf.png" sizes="any">
    <link rel="icon" href="assets/img/iconen/fandf.png" type="image/svg+xml">
    <link rel="apple-touch-icon" href="assets/img/iconen/fandf.png">
</head>

<body>
    <div id="pagina">
        <div id="navbalk">
            <div id="logo" onclick="document.location='./homepage.php'"><img id="logoimg" src="assets/img/iconen/fandf.png" alt="logo"></div>
            <div id="navlinks">
                <a class="links" href="./overzicht.php" target="_self">Schilderijen</a>
                <a class="links" href="" target="_self">Tekeningen</a>
                <a class="links" href="" target="_self">Kaarten</a>
                <a class="links" href="" target="_self">Dozen</a>
                <a class="links" href="" target="_self">Accessoires</a>
                <input type="text" id="search" name="search" placeholder="Search..">
            </div>
            <div id="homelinks">
                <a class="links" href="" target="_blank">Inloggen &nbsp;<img src="assets/img/iconen/usertwo.png" alt="inlogicoon"></a>
                <a class="links" href="" target="_blank">Favorieten &nbsp;<img src="assets/img/iconen/heart.png" alt="hart"></a>
                <a class="links" href="" target="_blank">Winkelwagen()<img src="assets/img/iconen/cart.png" alt="winkelwagen"></a>
                <button class="icon" onclick="alert('clicked')"><img src="assets/img/iconen/hamburger.png" alt="hamburger"></button>
            </div>
            <div id="burgernav">
                <a class="burgerlinks" href="" target="_self">Schilderijen</a>
                <a class="burgerlinks" href="" target="_self">Tekeningen</a>
                <a class="burgerlinks" href="" target="_self">Kaarten</a>
                <a class="burgerlinks" href="" target="_self">Dozen</a>
                <a class="burgerlinks" href="" target="_self">Accessoires</a>
                <a class="burgerlinks" href="" target="_blank">Inloggen &nbsp;<img src="assets/img/iconen/usertwo.png" alt="inlogicoon"></a>
                <a class="burgerlinks" href="" target="_blank">Favorieten &nbsp;<img src="assets/img/iconen/heart.png" alt="hart"></a>
                <a class="burgerlinks" href="" target="_blank">Winkelwagen&nbsp;<img src="assets/img/iconen/cart.png" alt="winkelwagen"></a>
            </div>
        </div>