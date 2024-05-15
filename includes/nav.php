
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid ">
        <a class="navbar-brand text-white" href="/S5L5-Progetto/">Home  <?php if ($my_user->id) { ?>
                
                <span class="text-white"><?= $my_user->name ?></span><?php
            } ?>  </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (!$my_user->id) { ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="/S5L5-Progetto/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/S5L5-Progetto/register.php">Register</a>
                    </li><?php
                } ?>
            </ul>
            <?php if (isset($my_user->id)) { ?>
                <a class="nav-link me-3" href="logout.php">Logout</a>   
            <?php
            } ?> 
         
          
        </div>
    </div>
</nav>