<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $id = $_GET["id"];
    $sku = $_GET["sku"];
    $naam = $_GET["naam"];
?>
<form method="post" action="delete_pr.php">
    <div>Weet je zeker dat je product <?=$naam?>, met id: <?=$id?> en productcode: <?=$sku?>.</div>
    <input type="hidden" id="id" name="id" value="<?=$id?>">
    <input type="hidden" id="sku" name="sku" value="<?=$sku?>">
    <a href="./index.php">nee</a>
    <input type="submit" value="ja">
</form>
<?php
}
include ('../admin_core/footer.php');
?>