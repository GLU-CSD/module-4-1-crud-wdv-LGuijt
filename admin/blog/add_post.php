<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
$bloginsert = $con->prepare("INSERT INTO blog (gebruiker, titel, tekst) VALUES (?,?,?)");
$bloginsert->bind_param("sss", $gebruiker, $titel, $tekst);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $gebruiker = $_POST['gebruiker'];
    $titel = $_POST['titel'];
    $tekst = $_POST['tekst'];
    if ($bloginsert->execute()) {
        header("Location: ./index.php");
        exit();
    }
}

include ('../admin_core/footer.php');