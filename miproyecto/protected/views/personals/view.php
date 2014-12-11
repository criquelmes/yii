<?php
/* @var $this PersonalsController */
/* @var $model Personals */

$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'List Personals', 'url'=>array('index')),
	array('label'=>'Create Personals', 'url'=>array('create')),
	array('label'=>'Update Personals', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Personals', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personals', 'url'=>array('admin')),
);
?>

<h1>Mostrando detalle de <b>Rut</b>: <?php echo $model->rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rut',
		'nombre',
		'apellido',
		'ffiniquito',
		'ecivil',
		'fnacimiento',
		'ciudad',
		'region',
		'cargo',
		'sbase',
		'sliquido',
		'telefono',
		'mail',
		'resena',
		'calificacion',
		'observacion',
	),
)); ?>
