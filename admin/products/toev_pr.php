<?php
$basesku == 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    echo $_POST['naam'] . '<br>';
    switch ($_POST['categorie']) {
        case 1:
            $basesku = 16142000;
            break;
        case 2:
            $basesku = 20111400;
            break;
        case 3:
            $basesku = 15261400;
            break;
        case 4:
            $basesku = 19150900;
            break;
        case 5:
            $basesku = 11182000;
            break;
        default:
            $basesku = 13091900;

    }

    echo $_POST['categorie'] . '<br>';
    echo $_POST['sub_categorie'] . '<br>';

    $prijs = $_POST['prijs'];
    $prijscent = $_POST['prijscent'];
    $prijscent = $prijscent / 100;
    $prijs = $prijs + $prijscent;
    echo $prijs . '<br>';

    echo $_POST['maat'] . '<br>';
    echo $_POST['maker'] . '<br>';
    echo $_POST['gemaaktop'] . '<br>';
    echo $_POST['img'] . '<br>';
    echo $_POST['extraimg'] . '<br>';
    echo $_POST['extraimgtwo'] . '<br>';
}