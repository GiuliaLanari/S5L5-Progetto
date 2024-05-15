<?php
include_once __DIR__ . "/includes/database.php";
include_once __DIR__ ."/includes/init.php";
include_once __DIR__ ."/includes/start.php";





?>

    
<div class="row justify-content-center mx-auto"> 
<form action="/S5L5-Progetto/add.php" method="post" class="col-5  g-3 needs-validation " > 
    <div>
    <div class="col-md-12" >
    <label for="title" class="form-label">Title:</label>
    <input type="text" name="title" class="form-control " id="title" placeholder="Title" >
  
  </div>
  <!-- <div class="col-md-12">
    <label for="publications" class="form-label">Publications:</label>
    <input type="date" class="form-control" name="publications" id="publications" placeholder="Publications" >
   
  </div> -->

  <div class="col-md-12">
      <label for="description" class="form-label">Description:</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Description"    >
      
    </div>
  <div class="col-md-12">
      <label for="genere" class="form-label">Genere:</label>
      <input type="text" class="form-control" name="genere" id="genere" placeholder="Genere">
      
    </div>
   
  
  <div class="col-12 justify-content-center d-flex">
    <button class="btn btn-success mt-4" type="submit">Save</button>
  </div>
</form>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>