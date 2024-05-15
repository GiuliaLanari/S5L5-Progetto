<?php
include_once __DIR__ . '/includes/init.php';
include_once __DIR__ . '/includes/start.php';

include_once __DIR__ . "/classes/User.php";
include_once __DIR__ . "/includes/init.php";

if ($my_user->id) {header('Location:/S5L5-Progetto/login.php');}



$user= $_POST['user'] ?? '';
$password= $_POST['password'] ?? '';

$my_user=new User();
$my_user->login($pdo, $user, $password);


include_once __DIR__ . '/includes/start.php'; ?>

<div class="col-12 col-md-6 mx-auto my-3">

    <h1 class="my-5">Login</h1>
    <?php if (isset($insuccess)): ?>
        <p class='text-danger text-center fw-bold'>Credenziali non valide</p>
    <?php endif; ?>
    <form action="" method="POST" novalidate>
        <div class="mb-3">
            <label for="user" class="form-label">Username</label>
            <input type="text" class="form-control" id="user" name="user" value="<?= $user ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>


<?php
include __DIR__ . '/includes/end.php';