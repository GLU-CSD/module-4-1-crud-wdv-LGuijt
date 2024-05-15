<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');

$catqry = $con->prepare("SELECT id, cat_naam FROM categorie_lijst");
$subcatqry = $con->prepare("SELECT id, sub_cat_naam FROM sub_categorie_lijst");
$maatqry = $con->prepare("SELECT id, maat_naam FROM maat_lijst");
$makerqry = $con->prepare("SELECT id, maker_bijnaam FROM maker_lijst");
$kleurqry = $con->prepare("SELECT kleur_naam FROM kleuren_lijst");


if ($catqry === false || $subcatqry === false || $maatqry === false || $makerqry === false || $kleurqry === false) {
    echo mysqli_error($con);
} else {
    $catqry->bind_result($cat_id, $cat_naam);
    $subcatqry->bind_result($subcat_id, $subcat_naam);
    $maatqry->bind_result($maat_id, $maat_naam);
    $makerqry->bind_result($maker_id, $maker_naam);
    $kleurqry->bind_result($kleur_naam);
    ?>

    <div id="adminpr">
        <div id="title">Product toevoegen</div>
        <form action="toev_pr.php" method="post">
            <div>
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam">
            </div>
            <div>
                <label for="categorie">Categorie:</label>
                <select name="categorie" id="categorie">
                    <?php
                    if ($catqry->execute()) {
                        while ($catqry->fetch()) { ?>
                            <option value="<?= $cat_id ?>"><?= $cat_naam ?></option>
                        <?php }
                    }
                    $catqry->close();
                    ?>
                </select>
            </div>
            <div>
                <label for="sub_categorie">Subcategorie:</label>
                <select name="sub_categorie" id="sub_categorie">
                    <?php
                    if ($subcatqry->execute()) {
                        while ($subcatqry->fetch()) { ?>
                            <option value="<?= $subcat_id ?>"><?= $subcat_naam ?></option>
                        <?php }
                    }
                    $subcatqry->close();
                    ?>
                </select>
            </div>
            <div>
                <label for="prijs">Prijs:</label>
                <input type="number" id="prijs" name="prijs">,<input type="number" id="prijscent" name="prijscent" min="0" max="99">

            </div>
            <div>
                <label for="maat">Maat:</label>
                <select name="maat" id="maat">
                    <?php
                    if ($maatqry->execute()) {
                        while ($maatqry->fetch()) { ?>
                            <option value="<?= $maat_id ?>"><?= $maat_naam ?></option>
                        <?php }
                    }
                    $maatqry->close();
                    ?>
                </select>
            </div>
            <div>
                <label for="maker">Maker:</label>
                <select name="maker" id="maker">
                    <?php
                    if ($makerqry->execute()) {
                        while ($makerqry->fetch()) { ?>
                            <option value="<?= $maker_id ?>"><?= $maker_naam ?></option>
                        <?php }
                    }
                    $makerqry->close();
                    ?>
                </select>
            </div>
            <div>
                <label for="gemaaktop">Gemaakt op:</label>
                <input type="date" id="gemaaktop" name="gemaaktop">
            </div>
            <div>
                <p>Gebruikte kleuren:</p>
                <?php
                if ($kleurqry->execute()) {
                    while ($kleurqry->fetch()) { ?>
                        <input type="checkbox" id="<?= $kleur_naam ?>" name="<?= $kleur_naam ?>" value="<?= $kleur_naam ?>">
                        <label for="<?= $kleur_naam ?>"> <?= $kleur_naam ?> </label>
                    <?php }
                }
                $kleurqry->close();
                ?>
            </div>
            <div>
                <label for="img">Image:</label>
                <input type="text" id="img" name="img">
            </div>
            <div>
                <label for="extraimg">Extra image:</label>
                <input type="text" id="extraimg" name="extraimg">
            </div>
            <div>
                <label for="extraimgtwo">Extra image:</label>
                <input type="text" id="extraimgtwo" name="extraimgtwo">
            </div>
            <input type="submit" value="Toevoegen">
        </form>
    </div>
    <?php
}
include ('../admin_core/footer.php');
?>