<?php
include 'core/header.php';
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sku = $_GET["sku"];
    $sqli_prepare = $con->prepare("SELECT naam, p.productcode, categorie, sub_cat_naam, prijs, maat_naam, maker_bijnaam, gemaakt_op, GROUP_CONCAT(img_src) AS img_src, (SELECT GROUP_CONCAT(kleuren_lijst.kleur_naam) FROM product_kleur AS k JOIN kleuren_lijst on k.kleur_id = kleuren_lijst.id WHERE k.product_id = p.id) AS kleur_naam FROM product_info AS p JOIN product_imgs AS i ON p.productcode = i.productcode JOIN maat_lijst ON p.id = maat_lijst.id JOIN sub_categorie_lijst ON p.id = sub_categorie_lijst.id JOIN maker_lijst ON p.id = maker_lijst.id WHERE p.productcode = ?");
    $sqli_prepare->bind_param("s", $sku);
    if ($sqli_prepare === false) {
        echo mysqli_error($con);
    } else {
        $sqli_prepare->bind_result($naam, $productcode, $categorie, $sub_cat_naam, $prijs, $maat_naam, $maker_bijnaam, $gemaakt_op, $img_src, $kleur_naam);
        if ($sqli_prepare->execute()) {
            while ($sqli_prepare->fetch()) {
                $img_src_array = explode(',', $img_src);
                ?>
                <div id="detailpage">
                    <div id="detailtitle">
                        <?php $categorie . " - " . $naam ?>
                    </div>
                    <div id="detailpiccon">
                        <div id="detailpicbig"><img class="detimg" id="bigpic" src="assets\img\prod_img\ff<?= $img_src_array[0] ?>" alt="big picture"></div>
                        <div class="detailpicsmall"><img class="s detimg" id="one" src="assets\img\prod_img\ff<?= $img_src_array[0] ?>" alt="small picture"></div>
                        <div class="detailpicsmall"><img class="s detimg" id="two" src="assets\img\prod_img\ff<?= $img_src_array[1] ?>" alt="small picture">
                        </div>
                        <div class="detailpicsmall"><img class="s detimg" id="three" src="assets\img\prod_img\ff<?= $img_src_array[2] ?>" alt="small picture">
                        </div>
                    </div>
                    <div id="detailtext">
                        <div id="detailprice">&euro;
                            <?= $prijs ?>
                        </div>
                        <button id="addcart" onclick="alert(<?= $productcode ?>)">Voeg toe aan winkelwagen</button>
                        <button id="addfave">Voeg toe aan favorieten</button>
                        <ul id="detailinfo">
                            <li><?= $sub_cat_naam ?></li>
                            <li><?= $maat_naam ?></li>
                            <li>Gemaakt door: <?= $maker_bijnaam ?></li>
                            <li>Gemaakt op: <?= $gemaakt_op ?></li>
                            <li>Gebruikte kleuren: <?= $kleur_naam ?></li>
                        </ul>
                    </div>
                </div>
                <?php
            }
        }
    }
    $sqli_prepare->close();
}
?>
<?php
include 'core/footer.php';
?>