<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
    echo $_POST['naam'] . '<br>';
    echo $_POST['categorie'] . '<br>';
    echo $_POST['sub_categorie'] . '<br>';

    $prijs = $_POST['prijs'];
    $prijscent = $_POST['prijscent'];
    $prijscent = $prijscent / 100;
    $prijs = $prijs + $prijscent;

    echo $prijs . '<br>';
    echo $prijscent . '<br>';
    echo $_POST['maat'] . '<br>';
    echo $_POST['maker'] . '<br>';
    echo $_POST['gemaaktop'] . '<br>';
    echo $_POST['img'] . '<br>';
    echo $_POST['extraimg'] . '<br>';
    echo $_POST['extraimgtwo'] . '<br>';
}