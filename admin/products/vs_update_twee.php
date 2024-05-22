<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
$catqry = $con->prepare("SELECT id, cat_naam FROM categorie_lijst");
$subcatqry = $con->prepare("SELECT id, sub_cat_naam FROM sub_categorie_lijst");
$maatqry = $con->prepare("SELECT id, maat_naam FROM maat_lijst");
$makerqry = $con->prepare("SELECT id, maker_bijnaam FROM maker_lijst");

$catqry->bind_result($cat_id, $cat_naam);
$subcatqry->bind_result($subcat_id, $subcat_naam);
$maatqry->bind_result($maat_id, $maat_naam);
$makerqry->bind_result($maker_id, $maker_naam);

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
                <div>Wijzig:</div>
                <?php
                if ($type == "naam") {
                    ?>
                <div class="reg">
                    <label for="nieuw"><?= $type ?></label>
                    <input type="text" id="nieuw" name="nieuw">
                </div>
                <?php
                } else if ($type === "categorie") { ?>
                <div class="reg">
                    <label for="nieuw">Categorie:</label>
                    <select name="nieuw" id="nieuw">
                <?php
                    if ($catqry->execute()) {
                        while ($catqry->fetch()) { ?>
                        <option class="option" value="<?= $cat_id ?>"><?= $cat_naam ?></option>
                    <?php
                        }
                    }
                    $catqry->close();?>
                    </select>
                </div> 
                <?php
                } else if ($type === "sub_categorie") {?>
                <div class="reg">
                    <label for="nieuw">Subcategorie:</label>
                    <select name="nieuw" id="nieuw">
                    <?php
                    if ($subcatqry->execute()) {
                        while ($subcatqry->fetch()) { ?>
                        <option value="<?= $subcat_id ?>"><?= $subcat_naam ?></option>
                        <?php
                        }
                    }
                    $subcatqry->close();?>
                    </select>
                </div>
                <?php
                } else if ($type === "prijs") {?>
                <div class="prijs">
                    <label for="prijs">Prijs:</label>
                    <input type="number" id="prijs" name="prijs">,<input type="number" id="prijscent" name="prijscent" min="0" max="99">
                </div>
                <?php
                } else if ($type === "maat") {?>
                <div class="reg">
                    <label for="nieuw">Maat:</label>
                    <select name="nieuw" id="nieuw">
                    <?php
                    if ($maatqry->execute()) {
                        while ($maatqry->fetch()) { ?>
                        <option value="<?= $maat_id ?>"><?= $maat_naam ?></option>
                        <?php 
                        }
                    }
                    $maatqry->close();?>
                    </select>
                </div>
                <?php
                } else if ($type === "gemaakt_op"){?>
                <div class="reg">
                    <label for="nieuw">Gemaakt op:</label>
                    <input type="date" id="nieuw" name="nieuw">
                </div>
                <?php
                } else if ($type === "opmerkingen"){?>
                <div class="reg">
                    <label for="nieuw"><?= $type ?></label>
                    <input type="text" id="nieuw" name="nieuw">
                </div>
                <?php
                }
                ?>
                <input type="hidden" id="type" name="type" value="<?= $type ?>">
                <input type="hidden" id="code" name="code" value="<?= $sku ?>">
                <input class="reg" id="submit" type="submit" value="Wijzigen">
            </form>
        </div>
        <?php
    }
}

$nameqry->close();

include ('../admin_core/footer.php');
?>