<?php include VIEWS . 'inc/header.php' ?>

<h1 class="text-center py-3 my-5">view all product</h1>
<div class="container mt-5 row col-8 mx-auto">

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">name</th>
                <th scope="col" class="text-center">description</th>
                <th scope="col" class="text-center">price</th>
                <th scope="col" class="text-center">quntaty</th>
                <th scope="col" class="text-center">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $pro): ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $pro['id']; ?></th>
                    <td class="text-center"><?php echo $pro['p_name']; ?></td>
                    <td class="text-center"><?php echo $pro['p_desc']; ?></td>
                    <td class="text-center"><?php echo $pro['price'] . '$   '; ?></td>
                    <td class="text-center"><?php echo $pro['qty']; ?></td>
                    <td class="text-center">
                        <a href="<?php url('product/edit/' . $pro['id']) ?>" class="btn btn-info" role='button'>update</a>
                        <a href="<?php url('product/delet/' . $pro['id'])  ?>" class="btn btn-danger" role='button'>delet</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include VIEWS . 'inc/footer.php' ?>