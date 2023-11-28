<?php

$viewPage = @$_REQUEST['page'];

switch ($viewPage) {
    case "product-page";
        $mainPage = "Ui/product/productList.php";
        break;
    case "product-create";
        $mainPage = "Ui/product/productCreate.php";
        break;
    default:
        $mainPage = "Ui/body.php";
}
