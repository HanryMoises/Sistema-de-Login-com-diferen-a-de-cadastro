<?php
include "bootstrap/header.php";
include 'navbar.php';
if ($_SESSION['user']->Tipo == "admin") {
    // echo $_SESSION['user']->Tipo;
    echo '<script>
    document.getElementById("padmin").style.display = "block"; 
    </script>';
}
?>


<h1 class="mt-5">Área Geral</h1>

<?php
include "bootstrap/footer.php";
?>