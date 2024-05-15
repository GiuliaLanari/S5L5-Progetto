<?php
include __DIR__ . "/includes/database.php";
include_once __DIR__ . "/classes/Dvd.php";

$title = $_POST ["title"]?? "";
$description = $_POST ["description"]?? "";
$email = $_POST ["email"]?? "";
$genere = $_POST ["genere"]?? "";


if($_POST){
    $dvd= new Dvd();
    $dvd->create($pdo, $title, $description, $genere);
  }



header("Location: /S5L5-Progetto/index.php");