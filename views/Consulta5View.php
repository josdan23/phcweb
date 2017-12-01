<?php
    include ("../controllers/ReporteController.php");

    $consulta = ReporteController::obtenerConsulta1();
?>

<div class="container-fluid">

<div class="row">
    <div class="col-md-6">
        <h4>Consulta 1</h4>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            <ul class="list-inline ">
                <li><a href="../reportes/Consulta5.php">IMPRIMIR</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <hr>
</div>
<div class="row">
    
    <div class="panel panel-default">
        <p>Cantidad de departamentos en la organizacion</p>
        <?php
            echo $consulta[0][0];
        ?>
    </div>

</div>
</div>