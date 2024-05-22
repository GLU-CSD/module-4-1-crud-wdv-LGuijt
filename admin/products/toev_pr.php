<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
$skuqry = $con->prepare("SELECT cat_count FROM categorie_lijst WHERE id = ? lIMIT 1");
$skuqry->bind_param('s', $cat);
if ($skuqry === false) {
    echo mysqli_error($con);
}

$basesku = 0;
$count = 1;

$naam = $productcode = $categorie = $subcategorie = $prijs = $maat = $maker = $gemaakt_op = $img_src = $is_main = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prinfo_insert = "INSERT INTO product_info (naam, productcode, categorie, sub_categorie, prijs, maat, maker, gemaakt_op) VALUES (?,?,?,?,?,?,?,?)";
    $i_insertqry = $con->prepare($prinfo_insert);
    $i_insertqry->bind_param("siiidiis", $naam, $productcode, $categorie, $subcategorie, $prijs, $maat, $maker, $gemaakt_op);

    $img_insert = "INSERT INTO product_imgs (productcode, img_src, main_img) VALUES (?,?,?)";
    $imgqry = $con->prepare($img_insert);
    $imgqry->bind_param("isi", $productcode, $img_src, $is_main);

    $kleur_insert = "INSERT INTO product_kleur (product_id, kleur_id) VALUES (?,?)";
    $klrqry = $con->prepare($kleur_insert);
    $klrqry->bind_param("ii", $productcode, $kleur_id);

    $cat_update = "UPDATE categorie_lijst SET cat_count = ? WHERE id = ?";
    $categorieqry = $con->prepare($cat_update);
    $categorieqry->bind_param("ii", $count, $cat);

    $naam = $_POST['naam'];

    $cat = $_POST['categorie'];
    $skuqry->bind_result($cat_count);
    if ($skuqry->execute()) {
        while ($skuqry->fetch()) {
            $count += $cat_count;
        }
    }

    $productcode = skubuilder($cat, $count);

    $categorie = $_POST['categorie'];
    $subcategorie = $_POST['sub_categorie'];

    
    $prijs = pricemaker($_POST['prijs'], $_POST['prijscent']);

    $maat = $_POST['maat'] . '<br>';
    $maker = $_POST['maker'] . '<br>';
    $gemaakt_op = $_POST['gemaaktop'] . '<br>';

    if ($i_insertqry->execute()) {
        $categorieqry->execute();
        ?>
        <div><p>Product toegevoegd.</p>
        <p><a href="./index.php" id="link">Terug naar overzicht</a></p>
        </div>
        <?php
    }

    if (isset($_FILES['img'])) {
        $mainimg_name = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], ABSOLUTE_HREF . "prod_img/ff" . $mainimg_name);

        $img_src = $mainimg_name;
        $is_main = 1;
        $imgqry->execute();
    }

    if (isset($_FILES['extraimg'])) {
        $extra_img_name = $_FILES['extraimg']['name'];
        move_uploaded_file($_FILES['extraimg']['tmp_name'], ABSOLUTE_HREF . "prod_img/ff" . $extra_img_name);

        $img_src = $extra_img_name;
        $is_main = 0;
        $imgqry->execute();
    }

    if (isset($_FILES['extraimgtwo'])) {
        $extra_img_name2 = $_FILES['extraimgtwo']['name'];
        move_uploaded_file($_FILES['extraimgtwo']['tmp_name'], ABSOLUTE_HREF . "prod_img/ff" . $extra_img_name2);

        $img_src = $extra_img_name2;
        $is_main = 0;
        $imgqry->execute();
    }

    if (isset($_POST['Blauw'])) {
        $kleur_id = 1;

        $klrqry->execute();
    }

    if (isset($_POST['Geel'])) {
        $kleur_id = 2;

        $klrqry->execute();
    }

    if (isset($_POST['Goud'])) {
        $kleur_id = 3;

        $klrqry->execute();
    }

    if (isset($_POST['Groen'])) {
        $kleur_id = 4;

        $klrqry->execute();
    }

    if (isset($_POST['Oranje'])) {
        $kleur_id = 5;

        $klrqry->execute();
    }

    if (isset($_POST['Paars'])) {
        $kleur_id = 6;

        $klrqry->execute();
    }

    if (isset($_POST['Rood'])) {
        $kleur_id = 7;

        $klrqry->execute();
    }

    if (isset($_POST['Roze'])) {
        $kleur_id = 8;

        $klrqry->execute();
    }

    if (isset($_POST['Wit'])) {
        $kleur_id = 9;

        $klrqry->execute();
    }

    if (isset($_POST['Zilver'])) {
        $kleur_id = 10;

        $klrqry->execute();
    }

    if (isset($_POST['Zwart'])) {
        $kleur_id = 11;

        $klrqry->execute();
    }
}


function pricemaker($euros, $cents)
{
    $cents = $cents / 100;
    $prijs = $euros + $cents;
    return $prijs;
}

function skubuilder($cat, $count)
{
    switch ($cat) {
        case 1:
            $basesku = 16142000;
            break;
        case 2:
            $basesku = 20111400;
            break;
        case 3:
            $basesku = 15261400;
            break;
        case 4:
            $basesku = 19150900;
            break;
        case 5:
            $basesku = 11182000;
            break;
        default:
            $basesku = 13091900;

    }
    $y = date('y');
    $basesku += $y;
    if ($count < 10) {
        $basesku = $basesku * 10;
    } else if ($count < 100) {
        $basesku = $basesku * 100;
    } else {
        $basesku = $basesku * 1000;
    }
    $basesku += $count;
    return $basesku;
}
include ('../admin_core/footer.php');
?>