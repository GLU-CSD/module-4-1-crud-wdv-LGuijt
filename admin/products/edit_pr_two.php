<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');

$imgqry = $con->prepare("INSERT INTO product_imgs (productcode, img_src) VALUES (?,?)");
$imgqry->bind_param("is", $productcode, $img_src);

$imgremove = $con->prepare("DELETE FROM product_imgs WHERE id = ? AND productcode = ?");
$imgremove->bind_param("ii", $i_id, $productcode);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST["act"] === "iadd") {
        if (isset($_FILES['img'])) {
            $productcode = $_POST["sku"];
            $mainimg_name = $_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'], ABSOLUTE_HREF . "prod_img/ff" . $mainimg_name);

            $img_src = $mainimg_name;
            if ($imgqry->execute()) {
                ?>
                <div>
                    <p>Product bijgewerkt.</p>
                    <p><a href="./index.php" id="link">Terug naar overzicht</a></p>
                </div>
                <?php
            }
        }
    } else if ($_POST["act"] === "irem"){
        $i_id = $_POST["remove"];
        $productcode = $_POST["sku"];
        if ($imgremove->execute()) {
            ?>
            <div>
                <p>Product bijgewerkt.</p>
                <p><a href="./index.php" id="link">Terug naar overzicht</a></p>
            </div>
            <?php
        }
    }
}