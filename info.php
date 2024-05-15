<?php

include_once __DIR__ . '/includes/init.php';
include __DIR__ . '/includes/start.php';
include_once __DIR__ ."/classes/Dvd.php";

$id = $_GET['id'];

$dvd= new Dvd();
$dvd->getById($pdo, $id);



include __DIR__ . '/includes/end.php';