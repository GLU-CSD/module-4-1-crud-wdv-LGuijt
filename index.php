<?php
include ('core/header.php');
// $sql = "SELECT naam FROM product_info LIMIT 5";
// $result = $con->query($sql);
?>
<div class="row">
    <div class="col">
        <h1 class="text-center"></h1>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <img src="https://placehold.co/1920x400.png" class="img-fluid" alt="">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h2 class="text-center">
            <?php
            // if ($result->num_rows > 0) {
            //     // output data of each row
            //     while ($row = $result->fetch_assoc()) {
            //         echo "Naam: " . $row["naam"];
            //     }
            // } else {
            //     echo "0 results";
            // }
            ?>
        </h2>
    </div>
    <div class="col-4 mb-3">
        <div class="card w-100">
            <img src="https://placehold.co/600x400.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">&euro; 39,99</p>
                <a href="product.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="col-4 mb-3">
        <div class="card w-100">
            <img src="https://placehold.co/600x400.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">&euro; 39,99</p>
                <a href="product.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


    <div class="col-4 mb-3">
        <div class="card w-100">
            <img src="https://placehold.co/600x400.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">&euro; 39,99</p>
                <a href="product.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-12 text-center">
        <a href="products.php" class="btn btn-info">SHOW ALL products</a>
    </div>
</div>
<?php
include ('core/footer.php');
?>