<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/admin/admin_core/header.php');

$blogselectqry = $con->prepare("SELECT gebruiker, titel, tekst FROM blog WHERE id = ?");
$blogselectqry->bind_param("i", $id);
$blogselectqry->bind_result($gebruiker, $titel, $tekst);

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $_GET["id"];
    if ($blogselectqry->execute()) {
        while ($blogselectqry->fetch()) {
            ?>
            <form method="post" action="edit_post.php">
                <label for="gebruiker">Gebruiker:</label>
                <input type="text" id="gebruiker" name="gebruiker" maxlength="255" value="<?=$gebruiker?>">
                <label for="titel">Titel:</label>
                <input type="text" id="titel" name="titel" maxlength="255" value="<?=$titel?>">
                <textarea name="tekst" rows="15" cols="1"><?=$tekst?></textarea>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" value="Toevoegen">
            </form>
            <div><a>verwijderen?</a></div>
            <?php
        }
    }
}

include ('../admin_core/footer.php');
?>