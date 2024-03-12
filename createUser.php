<?php

include './migrations/create-users-table.php';
$user = new Users();
$user->createTbl();