<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
}else{
    if($_SESSION['usuario']=="ok"){
        $nomUsuario=$_SESSION["nomUsuario"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    <?php 
    $url="http://".$_SERVER['HTTP_HOST']."/appwebb"
    ?>
<nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Adminisrador <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url; ?>/admin/inicioadmin.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url; ?>/admin/sesion/producto.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url; ?>">Ir al sitio</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url; ?>">oferta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url; ?>/admin/sesion/cerrar.php">Cerrar Sesion</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <br>
        <div class="row">