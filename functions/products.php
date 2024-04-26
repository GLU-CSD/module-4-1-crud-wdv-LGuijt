<?php

include("../core/db_connect.php");

// // Selecteer alle producten (simpele vorm)
// $sql = "SELECT * FROM producten";

// $result = mysqli_query($con, "SELECT * FROM products");

// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo $row["product_name"]."<br>";
//         echo $row["product_price"]."<br>";
//     }
// }else{
//     echo "Geen resultaten";
// }

// echo "__________<br><br><br>";

// // Selecteer alle producten (betere vorm)
// $sqli_query = $con->query("SELECT product_name,product_price FROM products;");
// if($sqli_query === false) {
//     echo mysqli_error($con);
// } else {
//     if($sqli_query->num_rows > 0){
//         while($row = $sqli_query->fetch_assoc()){
//             echo $row["product_name"]."<br>";
//             echo $row["product_price"]."<br>";
//         }
//     } else {
//         echo "Geen resultaten";
//     }
//     $sqli_query->close();
// }


// echo "__________<br><br><br>";


// $sqli_prepare = $con->prepare("SELECT product_name,product_price FROM products;");
// if ($sqli_prepare === false) {
//     echo mysqli_error($con);
// } else{
//     $sqli_prepare->bind_result($product_name,$product_price);
//     if ($sqli_prepare->execute()) {
        
//         while($sqli_prepare->fetch()){
//             echo $product_name."<br>";
//             echo $product_price."<br>";
//         }
//     }
// }
// $sqli_prepare->close();



/*
-- Voeg product 11 toe
INSERT INTO products (product_name, product_price, product_photo, product_description)
VALUES ('Wit T-shirt', 14.95, 'https://www.pexels.com/search/t-shirt/', 'Basic wit')

*/


// function getProducts(){
//     global $con;
//     $array = array();
//     $sqli_prepare = $con->prepare("SELECT product_id,product_name,product_price FROM products;");
//     if ($sqli_prepare === false) {
//         echo mysqli_error($con);
//     } else{
//         if ($sqli_prepare->execute()) {
//             $sqli_prepare->bind_result($product_id,$product_name,$product_price);
//             while($sqli_prepare->fetch()){
//                 $array[$product_id] =[
//                     'product_name' => $product_name,
//                     'product_price' => $product_price,
//                 ];
//             }
//         }
//     }
//     $sqli_prepare->close();

//     return $array;

// }

// prettyDump(getProducts());