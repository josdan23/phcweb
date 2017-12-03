<?php
    include ("../controllers/ReporteController.php");

    $consulta = ReporteController::obtenerConsulta1();
?>

<div class="container-fluid">

<div class="row" id="encabezado">
    <div class="col-md-6">
        <h4>Consulta 1</h4>
        <h5>Cantidad de departamentos en la organización</h5>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            <ul class="list-inline ">
                <li><a href="../reportes/Consulta1.php" class="btn btn-default glyphicon glyphicon-print"></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    
    <div class="panel panel-default">

        <table class="table table-default">
    
            <tbody>
                <tr>
                    <td>Departamentos</td>
                    <?php echo "<td>".$consulta[0][0]."</td>";?>
                </tr>
            </tbody>
        </table>
       
    </div>

</div>
</div>