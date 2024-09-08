<?php

class ProductController
{
    function index()
    {
        $dp = new product();
        $data['products'] = $dp->get_all_products();
        View::load('product', $data);
    }
    function edit($id)
    {
        $dp = new product();
        $data['update'] = $dp->get_product($id);
        View::load('edit', $data);
    }

    function store()
    {
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $desc = $_POST['desc'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $data = array(
                "p_name" => $name,
                "p_desc" => $desc,
                "price" => $price,
                "qty" => $qty,
            );
            $dp = new product();
            $id = $dp->insert_product($data);
            if ($id) {
                View::load("add", ['success' => "product " . $name . "added successfully and has id : " . $id]);
            }
        } else {
            View::load("add");
        }
    }

    function delet($id)
    {
        $dp = new product();
        if ($dp->delet_product($id)) {
            View::load("delet", ["id" => $id]);
        } else {
            echo "error";
        }
    }

    function update($id)
    {
        if (isset($_POST['update'])) {
            $data = array(
                "p_name" => $_POST['name'],
                "p_desc" => $_POST['desc'],
                "price" => $_POST['price'],
                "qty" => $_POST['qty']
            );
            $dp = new product();
            if ($dp->update_product($id, $data)) {
                View::load("update", ["id" => $id]);
            }
        } else {
            echo "data not submited";
        }
    }
}
