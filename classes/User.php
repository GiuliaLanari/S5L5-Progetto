<?php


class User{
    protected $name;
    protected $id;
    
   
    public function __construct($id=null, $pdo=null)
    {
        if($id){
            $stmt = $pdo->prepare("
            SELECT * FROM users
            WHERE id = :user_id;
        ");
    
        $stmt->execute([
            'user_id' => $_SESSION['user_id'],
        ]);
    
        $user_db = $stmt->fetch();
        }
     

    }

    static public function login($pdo, $myUserName, $password){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {   
            $stmt = $pdo->prepare("
                SELECT * FROM users
                WHERE user = :user;
            ");
        
            $stmt->execute([
                'user' => $myUserName,
            ]);
        
            $user_db = $stmt->fetch();
        
            if ($user_db) {
               
                if (password_verify($password, $user_db["password"])) {
                    $_SESSION['user_id'] = $user_db['id'];
                    
                    header('Location: /S5L5-Progetto/index.php'); exit;
                }else{
                    $insuccess = 'Credenziali non valide';
                }
                
            }
        
           
        }

    }
    public function logout(){
      session_destroy();
      header('Location:/S5L5-Progetto/login.php');
    }
}