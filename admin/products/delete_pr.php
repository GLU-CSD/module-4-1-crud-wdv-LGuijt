<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
$deleteqry = $con->prepare("DELETE FROM product_info WHERE id = ? AND productcode = ?");
$deleteqry->bind_param("ii", $id, $productcode);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST["id"];
    $productcode = $_POST["sku"];
    if ($deleteqry->execute()) {
        ?>
        <div>
            <p>Product verwijderd.</p>
            <p><a href="./index.php" id="link">Terug naar overzicht</a></p>
        </div>
        <?php
    }
}

include ('../admin_core/footer.php');
?>