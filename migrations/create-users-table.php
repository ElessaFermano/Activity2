<?php
include './database/db.php';
class Users extends Database
{
    public function createTbl()
    {
        $tbl = $this->conn->query("CREATE TABLE IF NOT EXISTS users(
            id int auto_increment primary key,
            first_name varchar(200) not null,
            last_name varchar(200) not null,
            email varchar(200) not null,
            password varchar(200) not null,
            token varchar(200) not null
            )");
    }
}