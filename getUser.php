<?php

include './migrations/get-users-table.php';

$get = new GetUser();
$data = $get->getAll();
echo json_encode($data);
?>