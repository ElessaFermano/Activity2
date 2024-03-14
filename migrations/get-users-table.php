<?php

include './database/db.php';

class GetUser extends Database
{
    public function getAll($params)
    {
        
        $firstname = $params ['first_name'];

        $get = $this->conn->query("SELECT * FROM users where first_name = '$firstname' ");
        $result = $get->fetch_all(MYSQLI_ASSOC);
        return $result;

    }
}

?>