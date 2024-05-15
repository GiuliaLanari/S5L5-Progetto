<?php
include_once __DIR__ . "/includes/database.php";
include_once __DIR__."/classes/Dvd.php";



$dvd= new Dvd();
$dvd->delete($pdo);