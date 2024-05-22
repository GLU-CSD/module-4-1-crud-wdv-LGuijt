<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
$nameqry = $con->prepare("SELECT naam FROM product_info WHERE productcode = ?");
$nameqry->bind_param("i", $sku);
$nameqry->bind_result($prod_naam);


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sku = $_GET["sku"];
    $type = $_GET["cat"];
    if ($nameqry->execute()) {
        while ($nameqry->fetch()) {
            $naam = $prod_naam;
        }
        ?>
        <div id="adminpr" class="update">
            <div id="title">Product wijzigen - <?= $naam ?></div>
            <form action="edit_pr.php" method="post" enctype="multipart/form-data">
                <?php
                if ($type == "naam") {
                    ?>
                    <div>Wijzig:</div>
                    <div class="reg">
                        <label for="nieuw"><?= $type ?></label>
                        <input type="text" id="nieuw" name="nieuw">
                    </div>
                    <input type="hidden" id="type" name="type" value="<?= $type ?>">
                    <input class="reg" id="submit" type="submit" value="Wijzigen">
                    <?php
                }
                ?>
            </form>
        </div>
        <?php
    }
}


include ('../admin_core/footer.php');