<?php
include "function/productCreateFun.php";
?>

<div class="container">
    <h5 class="text-primary">Product Create</h5>
    <br><br>
    <form action="" method="post">
        <div class="container-fluid border rounded border-black p-5">
            <div class="mb-3">
                <label>Product Name</label>

                <input type="text" class="form-control" name="product_name">

            </div>
            <div class="mb-3">
                <label>Product Price</label>

                <input type="text" class="form-control" name="product_price">

            </div>
            <div class="mb-3">
                <label>Product Description</label>

                <input type="text" class="form-control" name="product_description">

            </div>
            <br>
            <div class="flex float-end">
                <a href="index.php?page=product-page">
                    <button class="btn btn-primary px-5" type="button">Cancel</button>
                </a>
                <button class="btn btn-primary px-5" type="submit" name="product-create-btn">Create Product</button>
            </div>
            <br><br>
        </div>
    </form>
</div>
