<?php

class Database 
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost","root","");
        $db = $this->conn->query("CREATE DATABASE IF NOT EXISTS activity");

        $use = $this->conn->query("USE activity");
    }
}


?>