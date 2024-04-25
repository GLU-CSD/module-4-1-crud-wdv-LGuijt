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
</head>

<body>
    <div id="pagina">
        <div id="navbalk">
            <div id="logo" onclick="document.location='./homepage.php'"><img id="logoimg" src="" alt="logo"></div>
            <div id="navlinks">
                <a class="links" href="" target="_self">Schilderijen</a>
                <a class="links" href="" target="_self">Tekeningen</a>
                <a class="links" href="" target="_self">Kaarten</a>
                <a class="links" href="" target="_self">Dozen</a>
                <a class="links" href="" target="_self">Accessoires</a>
                <input type="text" id="search" name="search" placeholder="Search..">
            </div>
            <div id="homelinks">
                <a class="links" href="" target="_blank">Inloggen &nbsp;<img src="" alt="i"></a>
                <a class="links" href="" target="_blank">Favorieten &nbsp;<img src="" alt="h"></a>
                <a class="links" href="" target="_blank">Winkelwagen()<img src="" alt="w"></a>
                <button class="icon" onclick="alert('clicked')"><img src="" alt="h"></button>
            </div>
            <div id="burgernav">
        <a class="burgerlinks" href="" target="_self">Schilderijen</a>
        <a class="burgerlinks" href="" target="_self">Tekeningen</a>
        <a class="burgerlinks" href="" target="_self">Kaarten</a>
        <a class="burgerlinks" href="" target="_self">Dozen</a>
        <a class="burgerlinks" href="" target="_self">Accessoires</a>
        <a class="burgerlinks" href="" target="_blank">Inloggen &nbsp;<img
            src="" alt="i"></a>
        <a class="burgerlinks" href="" target="_blank">Favorieten &nbsp;<img
            src="" alt="h"></a>
        <a class="burgerlinks" href="" target="_blank">Winkelwagen&nbsp;<img
            src="" alt="w"></a>
      </div>
    </div>