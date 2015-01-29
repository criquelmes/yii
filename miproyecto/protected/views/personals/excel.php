<table>
	<tr>
		<th style="background-color: #555; color:#fff">Rut</th>
		<th style="background-color: #555; color:#fff">Nombre</th>
		<th style="background-color: #555; color:#fff">Apellido</th>
		<th style="background-color: #555; color:#fff">Fecha Finiquito</th>
		<th style="background-color: #555; color:#fff">Estado Civil</th>
		<th style="background-color: #555; color:#fff">Fecha Nacimiento</th>
		<th style="background-color: #555; color:#fff">Ciudad</th>
		<th style="background-color: #555; color:#fff">Region</th>
		<th style="background-color: #555; color:#fff">Cargo</th>
		<th style="background-color: #555; color:#fff">Sueldo Base</th>
		<th style="background-color: #555; color:#fff">Sueldo Liquido</th>
		<th style="background-color: #555; color:#fff">Telefono</th>
		<th style="background-color: #555; color:#fff">Email</th>
		<th style="background-color: #555; color:#fff">Grado Academico</th>
		<th style="background-color: #555; color:#fff">Resena</th>
		<th style="background-color: #555; color:#fff">Calificacion</th>
		<th style="background-color: #555; color:#fff">Observacion</th>
	</tr>
<?php foreach($model as $data):?>
	<tr>
		<td><?php echo $data->rut?></td>
		<td><?php echo $data->nombre?></td>
		<td><?php echo $data->apellido?></td>
		<td><?php echo $data->ffiniquito?></td>
		<td><?php echo $data->ecivil?></td>
		<td><?php echo $data->fnacimiento?></td>
		<td><?php echo $data->ciudad?></td>
		<td><?php echo $data->region?></td>
		<td><?php echo $data->cargo?></td>
		<td><?php echo $data->sbase?></td>
		<td><?php echo $data->sliquido?></td>
		<td><?php echo $data->telefono?></td>
		<td><?php echo $data->mail?></td>
		<td><?php echo $data->academico?></td>
		<td><?php echo $data->resena?></td>
		<td><?php echo $data->calificacion?></td>
		<td><?php echo $data->observacion?></td>
	</tr>
<?php endforeach;?>
</table>