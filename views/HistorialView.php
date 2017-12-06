<?php
    include ("../controllers/EmpleadoController.php");
    $arrayEmpleados = EmpleadoController::obtenerEmpleados();
    
    $empleadoEscogido = null;

    if(isset($_POST['idEmpleado']))
        $empleadoEscogido = EmpleadoController::obtenerUnEmpleado($_POST['idEmpleado']);
?>

<div class="container-fluid">


    <div class="row">
        <h4 id="historial">HISTORIAL</h4>
        <hr>
    </div>

	<div class="row">

        <div>
            
            <form action="" method="POST" class="form-inline" role="form">
            
                <div class="form-group">
                    <label  for="">Empleado</label>

                    <select name="idEmpleado" class="form-control" required="required">
                        
                        <option value=""></option>

                        <?php
                        foreach ($arrayEmpleados as $empleados) {
                            echo "<option value=".$empleados['idEmpleado'].">".$empleados['apellido']." ".$empleados['nombre']."</option>";
                        }
                        ?>
                    </select>
                </div>
            
                <button type="submit" class="btn btn-primary">Mostrar</button>
            </form>

        </div>
            
    </div>
    <br>

    <div class="row">
                    

        <br>
        <p><b>EMPLEADO: </b><?php echo $empleadoEscogido['nombre']." ".$empleadoEscogido['apellido'];?></p>
        <br>

		<div class="panel panel-default">

			<table class="table table-striped">
				<thead>

					<tr>
						<th>Puesto</th>
						<th>Fecha de Ingreso</th>
						<th>Fecha de Egreso</th>
					</tr>
				</thead>
				<tbody>

					<?php

						$arrayHistorial = EmpleadoController::historial($empleadoEscogido['idEmpleado']);
						foreach ($arrayHistorial as $empleado) {
					?>
					<tr>
						<td><?php echo $empleado['nombrePuesto']; ?></td>
						<td><?php echo $empleado['fechaIngreso']; ?></td>
						<td><?php ($empleado['fechaEgreso']) ? print $empleado['fechaEgreso'] : print "Permanece"; ?></td>

					<?php } ?>
				</tbody>

			</table>
		</div>

	</div>
</div>
