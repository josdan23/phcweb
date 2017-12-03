<?php
    include ("../controllers/ReporteController.php");

    $consulta = ReporteController::obtenerConsulta3();
?>

<div class="container-fluid">

<div class="row">
    <div class="col-md-6">
        <h4>Consulta 3</h4>
        <h5>Cantidad de puestos por cada departamento</h5>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            <ul class="list-inline ">
                <li><a href="../reportes/Consulta2.php">IMPRIMIR</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <hr>
</div>
<div class="row">
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Departamentos</th>
                <th>Cantidad de Puestos</th>
            </tr>
        </thead>

        <tbody>

            <?php
                for ($i = 0; $i < count($consulta); $i++) {
            ?>
            <tr>
                <td><?php echo $consulta[$i][0];?></td>
                <td><?php echo $consulta[$i][1];?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

</div>
</div>