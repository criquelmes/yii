<?php
/* @var $this PersonalsController */
/* @var $model Personals */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Personal', 'url'=>array('index')),
	array('label'=>'Crear Personal', 'url'=>array('create')),
	array('label'=>'Ver detalle Personal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Update Personals <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>