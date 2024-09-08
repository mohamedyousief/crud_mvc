<?php


class product extends DB
{
    private $table = 'products';
    private $conn;

    function __construct()
    {
        $this->conn = $this->connect();
    }

    function get_all_products()
    {
        return $this->conn->get($this->table);
    }

    function insert_product($data)
    {
        return $this->conn->insert($this->table, $data);
    }

    function delet_product($id)
    {
        $this->conn->where('id', $id);
        return $this->conn->delete($this->table);
    }

    function get_product($id)
    {
        $this->conn->where('id', $id);
        return $this->conn->getOne($this->table);
    }

    function update_product($id, $data)
    {
        $this->conn->where('id', $id);
        return $this->conn->update($this->table, $data);
    }
}
