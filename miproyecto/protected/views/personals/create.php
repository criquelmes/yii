<?php
/* @var $this PersonalsController */
/* @var $model Personals */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personals', 'url'=>array('index')),
	array('label'=>'Manage Personals', 'url'=>array('admin')),
);
?>

<h1>Create Personals</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>