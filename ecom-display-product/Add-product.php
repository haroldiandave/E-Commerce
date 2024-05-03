<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productQuantity = $_POST['productQuantity'];

    
    $sql = "INSERT INTO product_table (product_name, product_price, product_quantity) VALUES ('$productName', '$productPrice', '$productQuantity')";
    if (mysqli_query($db, $sql)) {
      
        echo json_encode(['success' => true]);
    } else {
        
        echo json_encode(['success' => false, 'error' => mysqli_error($db)]);
    }
}
?>
