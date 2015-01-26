<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>

<div class="row-fluid">
	<div class="span6">
		<h2>Crear Rol</h2>
		<?php $form=$this->beginWidget("CActiveForm");?>

		<?php echo $form->labelEx($role,"name");?>
		<?php echo $form->textField($role,"name");?>
		<?php echo $form->error($role,"name");?>

		<?php echo $form->labelEx($role,"description");?>
		<?php echo $form->textField($role,"description");?>
		<?php echo $form->error($role,"description");?><br>
		<?php echo  CHtml::submitButton("Create",array("class"=>"btn btn-primary"));?>
		<?php $this->endWidget();?>
	</div>
	<div class="span6">
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

