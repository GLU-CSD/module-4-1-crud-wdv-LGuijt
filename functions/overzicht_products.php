<?php
$sqli_prepare = $con->prepare("SELECT productcode, naam, prijs, maat_naam, img_src FROM product_info JOIN product_imgs ON product_info.id = product_id JOIN maat_lijst ON product_info.id = maat_lijst.id WHERE main_img = 1 ORDER BY naam");
if ($sqli_prepare === false) {
    echo mysqli_error($con);
} else {
    $sqli_prepare->bind_result($productcode,  $naam, $prijs, $maat_naam, $img_src);
    if ($sqli_prepare->execute()) {

        while ($sqli_prepare->fetch()) {
            ?>
            <div class="product">
                <div class="pic"><a href="./detailpage.php?sku=<?= $productcode ?>"><img class="imgm"
                            src="assets\img\prod_img\ff<?= $img_src ?>" alt="schilderij"></a></div>
                <div class="productname">
                    <?= $naam ?>
                </div>
                <div class="productprijs">&euro;
                    <?= $prijs ?>

                </div>
                <div class="productmaat">
                    <?= $maat_naam ?>
                </div>
                </div>
                <?php

        }
    }
    $productamount = 10;
}
$sqli_prepare->close();