<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($_POST["type"] === "prijs"){
        $nieuw = $_POST["prijs"] + ($_POST["prijscent"] / 100);
    } else {
        $nieuw = $_POST['nieuw'];
    }
    
    $type = $_POST['type'];
    $code = $_POST['code'];

    $regupdateqry = $con->prepare("UPDATE product_info SET $type = ? WHERE productcode = ?");
    $regupdateqry->bind_param("si", $nieuw, $code);
    if ($regupdateqry->execute()) {
        ?>
        <div>
            <p>Product bijgewerkt.</p>
            <p><a href="./index.php" id="link">Terug naar overzicht</a></p>
        </div>
        <?php
    }
}


include ('../admin_core/footer.php');
?>