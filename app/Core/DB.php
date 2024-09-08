<?php

require_once(LIBS . 'DB/MysqliDb.php');


class DB
{
    protected $dp;

    function connect()
    {
        $database = new MysqliDb(HOST, USER, PASS, DBNAME);

        if (!$database->connect()) {
            $this->dp = $database;
            return $this->dp;
        } else {
            echo "not found";
        }
    }
}
