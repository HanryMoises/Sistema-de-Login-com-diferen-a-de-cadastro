<?php
include "class.php";
session_start();


switch ($_SESSION['user']->Tipo){
    case 'comum':
        header("location:pagina_geral.php");
        break;
    case 'admin':
        header("location:pagina_admin.php");
        break;
    default:
        return;
}

?>