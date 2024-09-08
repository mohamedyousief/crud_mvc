<?php include VIEWS . 'inc/header.php'; ?>
<h1 class="text-center py-3 my-5">update product</h1>
<div class="container mt-5 row col-8 mx-auto">

    <form class="p-3 border mb-5" method="post" action="<?php url('product/update/' . $update["id"]); ?>">
        <div class="mb-3">
            <label for="name_product" class="form-label">product name</label>
            <input type="text" required class="form-control" id="name_product" name="name" value="<?php echo $update["p_name"] ?>">
        </div>
        <div class="mb-3">
            <label for="description_product" class="form-label">product description</label>
            <input type="text" required class="form-control" id="description_product" name="desc" value="<?php echo $update["p_desc"] ?>">
        </div>
        <div class="mb-3">
            <label for="price_product" class="form-label">product price</label>
            <input type="text" required class="form-control" id="price_product" name="price" value="<?php echo $update["price"] ?>">
        </div>
        <div class="mb-3">
            <label for="quantaty_product" class="form-label">product quantaty</label>
            <input type="number" required class="form-control" id="quantaty_product" name="qty" value="<?php echo $update["qty"] ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="update product" name='update'>
    </form>

</div>
<?php include VIEWS . 'inc/footer.php'; ?>