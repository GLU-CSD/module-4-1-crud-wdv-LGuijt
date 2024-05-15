<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
?>

<div id="adminpr">
    <div id="title">Product overzicht</div>
    <div id="link"><a href="vs_toev_pr.php">producten toevoegen</a></div>
    <table class="table">
        <tr>
            <th></th>
            <th>ID</th>
            <th>NAAM</th>
            <th style="padding-right: 1px;">PRODUCTCODE</th>
            <th>CATEGORIE</th>
            <th>SUB CATEGORIE</th>
            <th>PRIJS</th>
            <th>MAAT</th>
            <th>GEMAAKT OP</th>
            <th>LAATST BEWERKT</th>
            <th>KLEUREN</th>
            <th>IMG SRC</th>
        </tr>
        <?php

        $sql = "SELECT p.id, p.naam, p.productcode, c.cat_naam, sc.sub_cat_naam, p.prijs, m.maat_naam, p.gemaakt_op, p.laatst_bewerkt, (SElECT GROUP_CONCAT(img_src) FROM product_imgs AS i WHERE i.productcode = p.productcode) AS img_src, (SELECT GROUP_CONCAT(kleuren_lijst.kleur_naam) FROM product_kleur AS k JOIN kleuren_lijst on k.kleur_id = kleuren_lijst.id WHERE k.product_id = p.productcode) AS kleur_id FROM product_info AS p JOIN maat_lijst as m ON p.maat = m.id JOIN categorie_lijst as c ON p.categorie = c.id JOIN sub_categorie_lijst as sc ON p.sub_categorie = sc.id";
        $liqry = $con->prepare($sql);
        if ($liqry === false) {
            echo mysqli_error($con);
        } else {
            // $liqry->bind_param('s',$email);
            $liqry->bind_result($id, $naam, $productcode, $categorie, $sub_categorie, $prijs, $maat, $gemaakt_op, $laatst_bewerkt, $img_src, $kleur_id);
            if ($liqry->execute()) {
                $liqry->store_result();
                while ($liqry->fetch()) {
                    $img_src_array = explode(',', $img_src);
                    $kleur_id_array = explode(',', $kleur_id);
                    ?>
                    <tr>
                        <td>
                            <a>toekomstige bewerklink</a>
                        </td>
                        <td><?= $id; ?></td>
                        <td><?= $naam; ?></td>
                        <td><?= $productcode ?></td>
                        <td><?= $categorie ?></td>
                        <td><?= $sub_categorie ?></td>
                        <td><?= $prijs ?></td>
                        <td><?= $maat ?></td>
                        <td><?= $gemaakt_op ?></td>
                        <td><?= $laatst_bewerkt ?></td>
                        <td><?php foreach ($kleur_id_array as $kleur) {
                            echo $kleur . ' ';
                        } ?></td>
                        <td><?php foreach ($img_src_array as $img) {
                            echo $img . "<br>";
                        } ?></td>
                    </tr>
                    <?php
                }
            }
            $liqry->close();
        }
        ?>
    </table>
</div>
</>
<?php
include ('../admin_core/footer.php');
?>