<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Ver Listado de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear nuevo', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Detalle de Usuario ID: <?php echo $model->id; ?></h1>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>

<div class="row-fluid" style="padding-bottom: 261px;">
<!-- 	<div class="span6">
		<h3>Crear Rol</h3>
		<?php #$form=$this->beginWidget("CActiveForm");?>

		<?php #echo $form->labelEx($role,"name");?>
		<?php #echo $form->textField($role,"name");?>
		<?php #echo $form->error($role,"name");?>

		<?php #echo $form->labelEx($role,"description");?>
		<?php #echo $form->textField($role,"description");?>
		<?php #echo $form->error($role,"description");?><br>
		<?php #echo  CHtml::submitButton("Create",array("class"=>"btn btn-primary"));?>
		<?php #$this->endWidget();?>
	</div> -->
	<div class="span6">
		<br>
		<br>
		<ul class="nav nav-tabs nav-stacked">
			<?php foreach(Yii::app()->authManager->getAuthItems() as $data):?>
			<?php $enabled=Yii::app()->authManager->checkAccess($data->name,$model->id)?>
				<li>
					<h4><?php echo $data->name?> 
						<small>
							<?php if($data->type==0) echo "Role";?>
							<?php if($data->type==1) echo "Tarea";?>
							<?php if($data->type==2) echo "Operaciones";?> 
						</small>
						<?php echo CHtml::link($enabled?"Off":"On", array("users/assign","id"=>$model->id,"item"=>$data->name),
							array("class"=>$enabled?"btn":"btn btn-primary"));?>
					</h4>
					<p><?php echo $data->description?></p>
					<hr>
				</li>
			<?php endforeach;?>
		</ul>
	</div>
</div>

