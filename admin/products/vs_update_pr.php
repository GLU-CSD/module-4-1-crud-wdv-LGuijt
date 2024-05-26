<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');

$prodqry = $con->prepare("SELECT p.id, p.naam, c.cat_naam, sc.sub_cat_naam, p.prijs, m.maat_naam, p.gemaakt_op, p.actief, p.opmerkingen, (SElECT GROUP_CONCAT(img_src) FROM product_imgs AS i WHERE i.productcode = p.productcode) AS img_src, (SELECT GROUP_CONCAT(kleuren_lijst.kleur_naam) FROM product_kleur AS k JOIN kleuren_lijst on k.kleur_id = kleuren_lijst.id WHERE k.product_id = p.productcode) AS kleur_id FROM product_info AS p JOIN maat_lijst as m ON p.maat = m.id JOIN categorie_lijst as c ON p.categorie = c.id JOIN sub_categorie_lijst as sc ON p.sub_categorie = sc.id WHERE p.productcode = ?");
$prodqry->bind_param("i", $sku);
$prodqry->bind_result($id, $naam, $categorie, $sub_categorie, $prijs, $maat, $gemaakt_op,  $actief, $opmerkingen, $img_src, $kleur_id);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sku = $_GET["sku"];
    ?>
    <div id="adminpr">
        <div id="title">Product bewerken</div>
        <div id="maindiv">
            <?php
            if($prodqry->execute()){
                while($prodqry->fetch()){
                    $img_src_array = explode(',', $img_src);
                    $kleur_id_array = explode(',', $kleur_id);
                    ?>
                    <div id="top"><?=$naam?></div>
                    <div class="bewerk">
                        <div><a href="vs_update_twee.php?sku=<?=$sku?>&cat=naam">Bewerken</a></div>
                        <div>Naam</div>
                        <div><?=$naam?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_twee.php?sku=<?=$sku?>&cat=categorie">Bewerken</a></div>
                        <div>Categorie</div>
                        <div><?=$categorie?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_twee.php?sku=<?=$sku?>&cat=sub_categorie">Bewerken</a></div>
                        <div>Sub-Categorie</div>
                        <div><?=$sub_categorie?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_twee.php?sku=<?=$sku?>&cat=prijs">Bewerken</a></div>
                        <div>Prijs</div>
                        <div><?=$prijs?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_twee.php?sku=<?=$sku?>&cat=maat">Bewerken</a></div>
                        <div>Maat</div>
                        <div><?=$maat?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_twee.php?sku=<?=$sku?>&cat=gemaakt_op">Bewerken</a></div>
                        <div>Gemaakt op</div>
                        <div><?=$gemaakt_op?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_drie.php?sku=<?=$sku?>&cat=actief&actief=<?=$actief?>">Bewerken</a></div>
                        <div>Actief</div>
                        <div><?php
                        if($actief === 1){
                            echo "ja";
                        } else {
                            echo "nee";
                        }
                        ?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_twee.php?sku=<?=$sku?>&cat=opmerkingen">Bewerken</a></div>
                        <div>Opmerkingen</div>
                        <div><?=$opmerkingen?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_drie.php?sku=<?=$sku?>&cat=prodimg&extra=none">Bewerken</a></div>
                        <div>Afbeeldingen</div>
                        <div><?php
                        foreach($img_src_array as $img) {
                            echo $img . "<br>";
                        }
                        ?></div>
                    </div>
                    <div class="bewerk">
                        <div><a href="vs_update_drie.php?sku=<?=$sku?>&cat=kleuren&extra=none">Bewerken</a></div>
                        <div>Kleuren</div>
                        <div><?php
                        foreach($kleur_id_array as $kleur) {
                            echo $kleur . "<br>";
                        }
                        ?></div>
                    </div>
                    <a href="vs_delete_pr.php?id=<?=$id?>&sku=<?=$sku?>&naam=<?=$naam?>" class="deletelink">x Product verwijderen</a>
                    <?php
                }
            }
            ?>
        </div>
    </div>

    <?php
}

include ('../admin_core/footer.php');
?>