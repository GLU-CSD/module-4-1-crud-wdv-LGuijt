<?php

$sqli_prepare = $con->prepare("SELECT p.productcode, p.naam, p.prijs, m.maat_naam, i.img_src, (SELECT GROUP_CONCAT(kleuren_lijst.kleur_naam) FROM product_kleur AS k JOIN kleuren_lijst on k.kleur_id = kleuren_lijst.id WHERE k.product_id = p.productcode) AS kleur_id FROM product_info AS p JOIN product_imgs AS i ON p.productcode = i.productcode JOIN maat_lijst as m ON p.maat = m.id  WHERE main_img = 1 AND categorie = ? ORDER BY naam");
$sqli_prepare->bind_param('i', $cat);
if ($sqli_prepare === false) {
    echo mysqli_error($con);
} else {
    $sqli_prepare->bind_result($productcode, $naam, $prijs, $maat_naam, $img_src, $kleur_id);
    if ($sqli_prepare->execute()) {
        while ($sqli_prepare->fetch()) {
            $kleur_id_array = explode(',', $kleur_id);
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
                <div class="productkleur">
                    <?php foreach ($kleur_id_array as $kleur) { 
                        echo "<div class=" . $kleur . "></div>";
                     } ?>
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