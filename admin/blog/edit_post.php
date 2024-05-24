<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
$blogedit = $con->prepare("UPDATE blog SET gebruiker = ?, titel = ?, tekst = ? WHERE id = ?");
$blogedit->bind_param("sssi", $gebruiker, $titel, $tekst, $id);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $gebruiker = $_POST['gebruiker'];
    $titel = $_POST['titel'];
    $tekst = $_POST['tekst'];
    $id = $_POST['id'];
    if ($blogedit->execute()) {
        header("Location: ./index.php");
        exit();
    }
}



include ('../admin_core/footer.php');