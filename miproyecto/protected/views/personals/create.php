<?php
/* @var $this PersonalsController */
/* @var $model Personals */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Personal', 'url'=>array('index')),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Crear nuevo Personal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>