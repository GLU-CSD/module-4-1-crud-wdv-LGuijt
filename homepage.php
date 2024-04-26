<?php
include 'core/header.php';
?>
<div id="homepage">
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Let op!</strong> Dit is een schoolproject.
    </div>
    <div id="hometitle">
        <h1>FruitFish</h1>
    </div>
    <div id="plaatjes">
        <div id="frenfi">
            <div class="txt">Fruit</div>
            <div id="homeimagefr"></div>
        </div>
        <div id="fienfr">
            <div class="txt">Fish</div>
            <div id="homeimagefi"></div>
        </div>
    </div>
    <div id="nieuws">
        <p> Onze nieuwste producten</p>
        <div id=imagescroll>
            <?php

            $sqli_prepare = $con->prepare("SELECT img_src FROM product_imgs WHERE main_img = 1 LIMIT 7;");
            if ($sqli_prepare === false) {
                echo mysqli_error($con);
            } else {
                $sqli_prepare->bind_result($img_src);
                if ($sqli_prepare->execute()) {

                    while ($sqli_prepare->fetch()) {
                        echo '<img src="assets\img\prod_img\ff' . $img_src . '" alt=" ">';
                    }
                }
            }
            $sqli_prepare->close();
            ?>
        </div>
    </div>

</div>

<?php
include 'core/footer.php';
?>