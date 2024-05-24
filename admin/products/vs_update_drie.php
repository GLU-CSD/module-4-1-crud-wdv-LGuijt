<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');

$nameqry = $con->prepare("SELECT naam FROM product_info WHERE productcode = ?");
$nameqry->bind_param("i", $sku);
$nameqry->bind_result($prod_naam);

$imgqry = $con->prepare("SELECT id, img_src FROM product_imgs WHERE productcode = ?");
$imgqry->bind_param("i", $sku);
$imgqry->bind_result($i_id, $i_naam);

$klreenqry = $con->prepare("SELECT id, kleur_naam FROM kleuren_lijst");
$klreenqry->bind_result($k_id, $k_naam);

$klrtweeqry = $con->prepare("SELECT p.id, l.kleur_naam FROM product_kleur AS p JOIN kleuren_lijst as l ON p.kleur_id = l.id WHERE p.product_id = ?");
$klrtweeqry->bind_param("i", $sku);
$klrtweeqry->bind_result($klr_id, $klr_naam);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $type = $_GET["cat"];
    $sku = $_GET["sku"];
    if ($nameqry->execute()) {
        while ($nameqry->fetch()) {
            $naam = $prod_naam;
        }

        if ($type === "actief") {
            if (isset($_GET["actief"])) {
                $a = $_GET["actief"];
            }
            ?>
            <div id="adminpr" class="update">
                <div id="title">Product wijzigen - <?= $naam ?></div>
                <form action="edit_pr.php" method="post" enctype="multipart/form-data">
                    <div>
                        <?php
                        if ($a == 1) { ?>
                            Wilt u product <?= $naam ?> op inactief zetten?
                            <input type="hidden" id="nieuw" name="nieuw" value="0">
                            <?php
                        } else { ?>
                            Wilt u product <?= $naam ?> op actief zetten?
                            <input type="hidden" id="nieuw" name="nieuw" value="1">
                            <?php
                        } ?>
                    </div>
                    <input type="hidden" id="type" name="type" value="<?= $type ?>">
                    <input type="hidden" id="code" name="code" value="<?= $sku ?>">
                    <input class="reg" id="submit" type="submit" value="Ja">
                    <a href="./index.php">nee</a>
                </form>
            </div>
            <?php
        }

        if ($type === "prodimg") {
            if ($_GET["extra"] === "none") { ?>
                <div id="adminpr" class="update">
                    <div id="title">Product wijzigen - <?= $naam ?></div>
                    <div class="notrealform">
                        <div>Wilt u een afbeelding toevoegen of verwijderen?</div>
                        <a href="vs_update_drie.php?sku=<?= $sku ?>&cat=prodimg&extra=toev">Toevoegen</a>
                        <a href="vs_update_drie.php?sku=<?= $sku ?>&cat=prodimg&extra=verw">Verwijderen</a>
                    </div>
                </div>
                <?php
            } else if ($_GET["extra"] === "toev") { ?>
                <div id="adminpr" class="update">
                    <div id="title">Product wijzigen - <?= $naam ?></div>
                    <form action="edit_pr_two.php" method="post" enctype="multipart/form-data">
                        <div class="reg">
                            <label for="img">Nieuwe afbeelding:</label>
                            <input type="file" id="img" name="img">
                        </div>
                        <input type="hidden" id="act" name="act" value="iadd">
                        <input type="hidden" id="sku" name="sku" value="<?= $sku ?>">
                        <input class="reg" id="submit" type="submit" value="Toevoegen">
                    </form>
                </div>
                <?php
            } else if ($_GET["extra"] === "verw") { ?>
                <div id="adminpr" class="update">
                    <div id="title">Product wijzigen - <?= $naam ?></div>
                    <form action="edit_pr_two.php" method="post" enctype="multipart/form-data">
                        <div class="reg">
                            <label for="remove">afbeelding te verwijderen:</label>
                            <select name="remove" id="remove">
                            <?php
                                if ($imgqry->execute()) {
                                    while ($imgqry->fetch()) { ?>
                                        <option class="option" value="<?= $i_id ?>"><?= $i_naam ?></option>
                                <?php
                                    }
                                }
                                $imgqry->close(); ?>
                            </select>
                        </div>
                        <input type="hidden" id="act" name="act" value="irem">
                        <input type="hidden" id="sku" name="sku" value="<?= $sku ?>">
                        <input class="reg" id="submit" type="submit" value="Verwijderen">
                    </form>
                </div>
            <?php
            }
        } else if ($type === "kleuren") {
            if ($_GET["extra"] === "none") { ?>
                <div id="adminpr" class="update">
                    <div id="title">Product wijzigen - <?= $naam ?></div>
                    <div class="notrealform">
                        <div>Wilt u een kleur toevoegen of verwijderen?</div>
                        <a href="vs_update_drie.php?sku=<?= $sku ?>&cat=kleuren&extra=toev">Toevoegen</a>
                        <a href="vs_update_drie.php?sku=<?= $sku ?>&cat=kleuren&extra=verw">Verwijderen</a>
                    </div>
                </div>
            <?php
            } else if ($_GET["extra"] === "toev") { ?>
                <div id="adminpr" class="update">
                    <div id="title">Product wijzigen - <?= $naam ?></div>
                    <form action="edit_pr_two.php" method="post" enctype="multipart/form-data">
                        <div class="reg">
                            <label for="addklr">Kleur toevoegen:</label>
                            <select name="addklr" id="addklr">
                            <?php
                            if ($klreenqry->execute()) {
                                while ($klreenqry->fetch()) { ?>
                                    <option class="option" value="<?= $k_id ?>"><?= $k_naam ?></option>
                            <?php
                                }
                            }
                            $klreenqry->close(); ?>
                            </select>
                        </div>
                        <input type="hidden" id="act" name="act" value="kadd">
                        <input type="hidden" id="sku" name="sku" value="<?= $sku ?>">
                        <input class="reg" id="submit" type="submit" value="Toevoegen">
                    </form>
                </div>
                <?php
            } else if ($_GET["extra"] === "verw") { ?>
                <div id="adminpr" class="update">
                    <div id="title">Product wijzigen - <?= $naam ?></div>
                    <form action="edit_pr_two.php" method="post" enctype="multipart/form-data">
                        <div class="reg">
                            <label for="remklr">kleur te verwijderen:</label>
                            <select name="remklr" id="remklr">
                            <?php
                                if ($klrtweeqry->execute()) {
                                    while ($klrtweeqry->fetch()) { ?>
                                        <option class="option" value="<?= $klr_id ?>"><?= $klr_naam ?></option>
                                <?php
                                    }
                                }
                                $klrtweeqry->close(); ?>
                            </select>
                        </div>
                        <input type="hidden" id="act" name="act" value="krem">
                        <input type="hidden" id="sku" name="sku" value="<?= $sku ?>">
                        <input class="reg" id="submit" type="submit" value="Verwijderen">
                    </form>
                </div>
            <?php
            }

        }
    }
}

include ('../admin_core/footer.php');
?>