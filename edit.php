<?php
include_once __DIR__."/includes/database.php";
include_once __DIR__."/classes/Dvd.php";



$id= $_POST["id"]??"";
$title = $_POST ["title"]?? "";
$img = $_POST ["img"]?? "";
$description = $_POST ["description"]?? "";
$genere = $_POST ["genere"]?? "";



$dvd= new Dvd();
$dvd->update($pdo, $id, $title, $img, $description, $genere);

  
  
 
