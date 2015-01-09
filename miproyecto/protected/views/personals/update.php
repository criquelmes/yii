<?php
/* @var $this PersonalsController */
/* @var $model Personals */

$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Actualizar datos de: <strong><?php echo $model->rut; ?></strong></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>