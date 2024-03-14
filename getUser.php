<?php

include './migrations/get-users-table.php';

$get = new GetUser();
$data = $get->getAll($_GET);
echo json_encode($data);
?>