<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
$removeqry = $con->prepare("DELETE FROM blog WHERE id = ?");
$removeqry->bind_param('i', $id);

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $id = $_POST["id"];
    if($removeqry->execute()){
        header("Location: ./index.php");
        exit();
    }
}

include ('../admin_core/footer.php');