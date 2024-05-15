<?php
include __DIR__ . "/includes/database.php";
include_once __DIR__ . "/classes/Dvd.php";

$title = $_POST ["title"]?? "";
$img = $_POST ["img"]?? "";
$description = $_POST ["description"]?? "";
$genere = $_POST ["genere"]?? "";


if($_POST){
    $dvd= new Dvd();
    $dvd->create($pdo, $title, $img, $description, $genere);
  }



header("Location: /S5L5-Progetto/index.php");