<?php
if (isset($_POST['product-create-btn'])) {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $description = $_POST['product_description'];

    $insertProduct = mysqli_query($connection,
        "INSERT INTO products( name , price ,description)
    VALUES('" . $name . "' , '" . $price . "' ,'" . $description . "')");

    if ($insertProduct) {
        echo "<script>window.location.href='index.php?page=product-page'</script>";
    }
}
