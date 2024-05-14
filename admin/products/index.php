<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
?>


<table>
    <tr>
        <th></th>
        <th>ID</th>
        <th>NAAM</th>
        <th>PRODUCTCODE</th>
        <th>CATEGORIE</th>
        <th>SUBCATEGORIE</th>
        <th>PRIJS</th>
        <th>MAAT</th>
        <th>GEMAAKT OP</th>
        <th>LAATST BEWERKT</th>
        <th>Kleuren</th>
    </tr>
<?php

    $sql = "SELECT p.id, p.naam, p.productcode, c.cat_naam, sc.sub_cat_naam, p.prijs, m.maat_naam, p.gemaakt_op, p.laatst_bewerkt, (SELECT GROUP_CONCAT(kleuren_lijst.kleur_naam) FROM product_kleur AS k JOIN kleuren_lijst on k.kleur_id = kleuren_lijst.id WHERE k.product_id = p.id) AS kleur_id FROM product_info AS p JOIN maat_lijst as m ON p.maat = m.id JOIN categorie_lijst as c ON p.categorie = c.id JOIN sub_categorie_lijst as sc ON p.sub_categorie = sc.id";
    $liqry = $con->prepare($sql);
    if($liqry === false) {
        echo mysqli_error($con);
    } else{
        // $liqry->bind_param('s',$email);
        $liqry->bind_result($id, $naam, $productcode, $categorie, $sub_categorie, $prijs, $maat, $gemaakt_op, $laatst_bewerkt, $kleur_id);
        if($liqry->execute()){
            $liqry->store_result();
            while($liqry->fetch()){
                ?>
                <tr>
                    <td>
                        <a>toekomstige bewerklink</a>
                    </td>
                    <td><?= $id;?></td>
                    <td><?= $naam;?></td>
                    <td><?= $productcode ?></td>
                    <td><?= $categorie ?></td>
                    <td><?= $sub_categorie ?></td>
                    <td><?= $prijs ?></td>
                    <td><?= $maat ?></td>
                    <td><?= $gemaakt_op ?></td>
                    <td><?= $laatst_bewerkt ?></td>
                    <td><?= $kleur_id ?></td>
                </tr>
                <?php
            }
        }
        $liqry->close();
    } 
?>
</table>
</>
<?php
    include('../admin_core/footer.php');
?>