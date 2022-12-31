<?php
include 'bootstrap/header.php';
include 'class.php';
session_start();   


?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pagina_geral.php">página geral</a>
                </li>
                <li style="display:none" id="padmin" class="nav-item">
                    <a class="nav-link" href="pagina_admin.php">página admin</a>
                </li>

        </div>
        <p class=" text-dark"><?php echo $_SESSION['user']->Email; ?></p>
    </div>
</nav>


<?php
include 'bootstrap/footer.php';
?>