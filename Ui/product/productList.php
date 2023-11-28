<?php
include "function/productListFun.php";
?>
<div class="container">

    <h5 class="text-primary">Product List</h5>

    <a href="index.php?page=product-create">
        <button type="button" class="btn btn-primary btn-lg ms-5">Product Create</button>
    </a>
    <br><br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($products as $key => $product) {
    ?>
            <tr>
                <th><?php echo $product['id'] ?></th>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['price'] ?></td>
                <td><?php echo $product['description'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                </td>
            </tr>
            <?php
}
?>






        </tbody>
    </table>
</div>