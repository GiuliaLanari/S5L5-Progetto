<?php
session_start();

include  __DIR__ . '/database.php';
include_once __DIR__ . "/../classes/User.php";



if (isset($_SESSION['user_id'])) {
    $my_user= new User($_SESSION['user_id'], $pdo);
 
} else {
    $my_user= new User();
}