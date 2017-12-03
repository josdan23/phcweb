<?php
    include ("../controllers/ReporteController.php");

    $consulta = ReporteController::obtenerConsulta2();
?>

<div class="container-fluid">

<div class="row">
    <div class="col-md-6">
        <h4>Consulta 2</h4>
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
                <th>Departamento</th>
                <th>Nivel</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Puesto</th>
                <th>Nivel</th>
            </tr>
        </thead>

        <tbody>

            <?php
                for ($i = 0; $i < count($consulta); $i++) {
            ?>
            <tr>
                <td><?php echo $consulta[$i][0];?></td>
                <td><?php echo $consulta[$i][1];?></td>
                <td><?php echo $consulta[$i][2];?></td>
                <td><?php echo $consulta[$i][3];?></td>
                <td><?php echo $consulta[$i][4];?></td>
                <td><?php echo $consulta[$i][5];?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

</div>
</div>