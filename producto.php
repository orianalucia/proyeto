<?php  include("vista/cabecera.php");?>
<?php
include("admin/config/conexion.php");
$result = ("SELECT * FROM producto");
?>
   <?php foreach($conn->query($result) as $list){ ?>
<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="img/<?php echo $list['foto']?>" alt="" width="250px" height="200px">
    <div class="card-body">
        <h4 class="card-title"><?php echo $list['nombre']?></h4>
        <h4 class="card-title"><?php echo $list['precio']?></h4>
        <a href="#" class="btn btn-primary">Ver mas</a>
    </div>
</div> 
</div>

<?php }?>

 



<?php  include("vista/pie.php");?>