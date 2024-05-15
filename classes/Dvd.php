<?php

class Dvd{
    protected $id;
    protected $title;
    protected $img;
    protected $description;
    protected $genere;

    public function __construct($id=null, $title=null, $img=null, $description=null, $genere=null)
    {
        $this->id=$id;
        $this->title= $title;
        $this->img= $img;
        $this->description= $description;
        $this->genere= $genere;

    }

    public function getAll($pdo){

        $stmt = $pdo->query('SELECT * FROM dvd');
        $dvds= $stmt->fetchAll();

        foreach($dvds as $dvd){
            echo "<div class='card'>";
        
            echo "<div class='card-body'>";
            echo "<h5>".$dvd['title'] . "<h5>" ;
            echo "<p>" .$dvd['description']  . "<p>";
            echo "<p>" .$dvd['genere'] . "<p>";

            echo "<a class='btn btn-primary mx-1' href='http://localhost/S5L5-Progetto/form.php/?id= $dvd[id]' > Edit</a>" ;
            echo "<a class='btn btn-danger mx-1' href='http://localhost/S5L5-Progetto/delete.php/?id= $dvd[id]' > Delete</a>" ;
            echo "<a class='btn btn-info mx-1' href='http://localhost/S5L5-Progetto/info.php/?id= $dvd[id]' > Info</a>" ;

       
            echo "</div></div>"; 
        };
        
    }


    public function getById($pdo, $id){

$stmt = $pdo->prepare("SELECT *  FROM dvd WHERE id = ?");
$stmt->execute([$id]);

$info = $stmt->fetch();

if($info ){
    echo '<h1 class="display-2 text-center my-5">Dettagli DVD:</h1>';
    echo '<div class="card col-6 mx-auto" >';
    echo '<div class="card-body d-flex flex-column ">';
    echo " <h5 class=\"card-title display-6 text-center\"> $info[title] </h5> ";
    echo "<p class=\"card-text \">Description: $info[description] </p>";
    echo "<p class=\"card-text\">Genere:  $info[genere] </p> ";
    echo '<a href=" /S5L5-Progetto/index.php" class="btn btn-outline-success ms-auto">Go Back</a>';
    echo '</div></div>';
}

    }

    public function create($pdo, $title, $description, $genere){
        $stmt = $pdo->prepare("INSERT INTO dvd (title, description, genere) VALUES (:title, :description, :genere)");
    $stmt->execute([
        'title' => $title,
        'description' => $description ,
        'genere' => $genere,
        ]);
    }




    public function update($pdo, $id, $title, $description, $genere){

        $stmt = $pdo->prepare("UPDATE dvd SET title= :title, description= :description, genere= :genere WHERE id=:id");
$stmt->execute([
    'id'=> $id,
    'title'=> $title,
    'description' => $description,
    'genere' => $genere,
    
]);

header("Location: /S5L5-Progetto/index.php");

    }





    public function delete($pdo){
    
        $id = $_GET['id'];
$stmt = $pdo->prepare("DELETE  FROM dvd WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->execute([$id]);

header("Location: /S5L5-Progetto/index.php");

    }

}