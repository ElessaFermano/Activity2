<?php

include './migrations/insert-users-table.php';

$insert = new Insert();
$insert->insertUser($_POST);

?>