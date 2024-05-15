
<?php


include_once __DIR__ . '/includes/init.php';

include __DIR__ . '/includes/start.php';
include_once __DIR__ ."/classes/Dvd.php";





if ($my_user->id){?>
  <h1>Ciao <?= $my_user->name ?>!</h1>
  
<a class="btn btn-success my-4" href= "http://localhost/S5L5-Progetto/form-add.php">Add New</a>



<?php

$dvd= new Dvd();
$dvd->getAll($pdo);

  
 
} 
else{?>

  <h1 class="text-center my-5">Benvenuti</h1>
  <p class="text-center">Cosa ASPETTI  registrati subito al nostro sito, troverai molti film esclusivi!</p>
  <div class="row my-4 justify-content-center">
    <h4>Anteprima</h4>
    <div class="col-12 col-md-3 ">
    <img class="w-100 h-100" src="./assests/avengers.webp" alt="cover-film">
    </div>
    <div class="col-12 col-md-3">
    <img class="w-100 h-100" src="./assests/iron-man3.jpg" alt="cover-film">
    </div>
    <div class="col-12 col-md-3">
    <img class="w-100 h-100"  src="./assests/images.jpg" alt="cover-film">
    </div>
  

  </div>
  
  
  
  <?php
  
}





include __DIR__ . '/includes/end.php';