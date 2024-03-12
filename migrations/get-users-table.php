<?php

include './database/db.php';

class GetUser extends Database
{
    public function getAll()
    {
        $get = $this->conn->query("SELECT * FROM users where first_name = 'elessa' ");
        $result = $get->fetch_all(MYSQLI_ASSOC);
        return $result;

    }
}

?>