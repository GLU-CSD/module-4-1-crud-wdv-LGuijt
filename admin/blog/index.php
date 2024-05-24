<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');
$blogqry = $con->prepare("SELECT id, gebruiker, titel, tekst FROM blog");
$blogqry->bind_result($id, $gebruiker, $titel, $tekst);
?>
<div>
    <form method="post" action="add_post.php">
        <label for="gebruiker">Gebruiker:</label>
        <input type="text" id="gebruiker" name="gebruiker" maxlength="255">
        <label for="titel">Titel:</label>
        <input type="text" id="titel" name="titel" maxlength="255">
        <textarea name="tekst" rows="15" cols="1"></textarea>
        <input type="submit" value="Toevoegen">
    </form>
    <?php
    if ($blogqry->execute()){
        while($blogqry->fetch()){
            ?>
            <div>
                <div>gebruiker <?=$gebruiker?> heeft geschreven:</div>
                <div><?=$titel?></div>
                <div><?=$tekst?></div>
                <a href="vs_edit_post.php?id=<?=$id?>">bewerken</a>
            </div>
            <?php
        }
    }
    ?>
</div>
<?php
include ('../admin_core/footer.php');
?>