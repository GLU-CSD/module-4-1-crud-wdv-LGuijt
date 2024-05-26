<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');

if($_SERVER['REQUEST_METHOD'] === "GET"){
    $id = $_GET["id"];
?>
<form method="post" action="remove_post.php">
    <div>Weet U zeker dat u dit bericht wilt verwijderen?</div>
    <a href="index.php">nee</a>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="submit" value="ja">
</form>
<?php
}
include ('../admin_core/footer.php');
?>