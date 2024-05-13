<?php
include 'core/header.php';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["cat"])) {
        $cat = $_GET["cat"];
    } else {
        $cat = 1;
    }
    switch ($cat) {

    }
    ?>
    <div class="mainpage"> <!--pagina zonder de navigatie balk en de footer -->
        <div class="mainpagelinks"><!--links boven de producten-->
            <p><a href="homepage.php">Home</a> > <a href="/index.php">Shop</a> > Schilderijen</p>
        </div>
        <form method="get" class="sidebar">
            <div class="filters"> <!--filters voor de maat, je kan er op klikken verder niet functioneel-->
                <p style="border-bottom: 1px solid black; font-size: 18px;">Maat</p>
                <?php if($cat = 1){?>
                <p><input type="checkbox" name="maat[]" value="XS">XS</p>
                <p><input type="checkbox" name="maat[]" value="S">S</p>
                <p><input type="checkbox" name="maat[]" value="M">M</p>
                <p><input type="checkbox" name="maat[]" value="L">L</p>
                <p><input type="checkbox" name="maat[]" value="XL">XL</p>
                <?php } ?>
            </div>
            <div class="filters"> <!--filters voor de kleur, je kan er op klikken verder niet functioneel-->
            <p style="border-bottom: 1px solid black; font-size: 18px;">Type</p>
            <?php if ($cat != 1){?>
            <p><input type="checkbox" name="type[]" value="plateau">Plateau</p>
            <p><input type="checkbox" name="type[]" value="onderzetter">Onderzetter</p>
            <p><input type="checkbox" name="type[]" value="klok">Klok</p>
            <?php } ?>
        </div>
            <div class="filters"> <!--filters voor de kleur, je kan er op klikken verder niet functioneel-->
                <p style="border-bottom: 1px solid black; font-size: 18px;">Kleur</p>
                <p><input type="checkbox" name="kleur[]" value="Blauw">Blauw </p>
                <p><input type="checkbox" name="kleur[]" value="Geel">Geel</p>
                <p><input type="checkbox" name="kleur[]" value="Goud">Goud</p>
                <p><input type="checkbox" name="kleur[]" value="Groen">Groen</p>
                <p><input type="checkbox" name="kleur[]" value="Oranje">Oranje</p>
                <p><input type="checkbox" name="kleur[]" value="Paars">Paars</p>
                <p><input type="checkbox" name="kleur[]" value="Rood">Rood</p>
                <p><input type="checkbox" name="kleur[]" value="Roze">Roze</p>
                <p><input type="checkbox" name="kleur[]" value="Wit">Wit</p>
                <p><input type="checkbox" name="kleur[]" value="Zilver">Zilver</p>
                <p><input type="checkbox" name="kleur[]" value="Zwart">Zwart</p>
            </div>
            <div class="filters"><!--prijs sliders-->
                <p style="border-bottom: 1px solid black; font-size: 18px;">Prijs</p>
                <p>Min. Prijs:</p>
                <div class="pricerange">
                    <p>€<span id="minvalue"></span></p>
                    <p>-</p>
                    <p>€100</p>
                </div>
                <div class="slider">
                    <input type="range" min="0" max="100" name="minprice" id="minprice" value="0">
                </div>
                <p>Max. Prijs:</p>
                <div class="pricerange">
                    <p>€0</p>
                    <p>-</p>
                    <p>€<span id="maxvalue"></span></p>
                </div>
                <div class="slider">
                    <input type="range" min="0" max="100" name="maxprice" id="maxprice" value="100">
                </div>
            </div>
            <input type="submit" class="toepassen" value="Toepassen"> <!--knop voor de filters toepassen. klikbaar-->
        </form>
        <div id="products">
            <div id="producttop"><!--titel van de pagina, en de knop voor het sorteren-->
                <div id="title">
                    <p>Schilderijen</p>
                </div>
                <div id="productsort">
                    <select name="sorteren">
                        <option value="a-z">Naam: A-Z</option>
                        <option value="z-a">Naam: Z-A</option>
                        <option value="pricelow-high">Prijs: Laag-Hoog</option>
                        <option value="pricehigh-low">Prijs: Hoog-Laag</option>
                    </select>
                </div>
            </div>
            <div id="productlist"><!-- de producten, plus de hoeveelheid aan de boven en onderkant-->
                <div class="productdescription">fluid art acryl schilderijen</div>
                <div id="check"></div>
                <div id="allproducts"><!--alle producten op de pagina-->
                    <?php
                    include 'functions/overzicht_products.php'
                        ?>
                </div>
                <div class="productamount">
                    <?php echo $productamount; ?> artikelen
                </div><!--hoeveelheid producten-->
            </div>
        </div>
    </div>
    <?php
}
include 'core/footer.php' ?>