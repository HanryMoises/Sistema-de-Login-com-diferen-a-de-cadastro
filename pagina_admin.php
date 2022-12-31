<?php
include "bootstrap/header.php";
include 'navbar.php';


if($_SESSION['user']->Tipo != "admin"){
    header("location:pagina_geral.php");
}
echo'<script>
document.getElementById("padmin").style.display="block";
</script>';

?>

<h1 class="mt-5">Área Admin</h1>
<?php
include "bootstrap/footer.php";
?>