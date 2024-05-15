<?php

include_once __DIR__ . '/includes/init.php';

include __DIR__ . '/includes/start.php';
include_once __DIR__ ."/classes/Dvd.php";



$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM dvd WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);



?>



    <h1 class="display-2 text-center my-5">Modifica:</h1>
<div class="row justify-content-center mx-auto"> 
<form  action="/S5L5-Progetto/edit.php" method="post" class="col-5  g-3 needs-validation " > 

  <input type="hidden" name="id" value="<?= $id ?>">
    <div>
  <div class="col-md-12" >
    <label for="title" class="form-label">Title:</label>
    <input type="text" name="title" class="form-control " id="title" placeholder="Title" value="<?=$row["title"] ?>" >
  
  </div>
  <!-- <div class="col-md-12">
    <label for="publications" class="form-label">Publications:</label>
    <input type="date" class="form-control" name="publications" id="publications" placeholder="Publications" value="$row["publications"] " >
   
  </div> -->

  <div class="col-md-12">
      <label for="description" class="form-label">Description:</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?=$row["description"] ?>"   >
      
    </div>
  <div class="col-md-12">
      <label for="genere" class="form-label">Genere:</label>
      <input type="text" class="form-control" name="genere" id="genere" placeholder="Genere" value="<?=$row["genere"] ?>"   >
      
    </div>
   
  
  <div class="col-12 justify-content-center d-flex">
    <button class="btn btn-success mt-4" type="submit">Modifica</button>
  </div>
</form>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>