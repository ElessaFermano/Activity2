<?php

include './database/db.php';
class Insert extends Database
{
    public function insertUser($params)
    {
        $firstname = $params ['first_name'];
        $lastname = $params ['last_name'];
        $email = $params['email'];
        $password = $params ['password'];
        $token = $params ['token'];

        $insert = $this->conn->query("INSERT INTO users(first_name, last_name, email, password, token)
        VALUES('$firstname', '$lastname', '$email', '$password', '$token')");
    }
}