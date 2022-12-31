<?php

include 'bootstrap/header.php';
include "class.php";

session_start();
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = new Usuarios();
}

if (isset($_POST['ok'])) {
    $_SESSION['user']->Informacoes($_POST['email'],$_POST['senha']);
    $_SESSION['user']->ValidarUsuario($_POST['email'], $_POST['senha']);
}

?>

<style>
    * {
        color: black;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col col-md-4 offset-4 g-5">
            <form action="index.php" method="post">
                <h1 class="text mt-3 mb-3">Login</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name='email' placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control text-dark" id="floatingPassword" name="senha" placeholder="Password">
                    <label for="floatingPassword text-dark">Password</label>
                </div>

                <button type='submit' name="ok" class=" btn btn-danger mt-3">Login</button>
            </form>
        </div>
    </div>
</div>


<?php

include 'bootstrap/footer.php'

?>