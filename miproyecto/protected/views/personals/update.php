<?php
/* @var $this PersonalsController */
/* @var $model Personals */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personals', 'url'=>array('index')),
	array('label'=>'Create Personals', 'url'=>array('create')),
	array('label'=>'View Personals', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Personals', 'url'=>array('admin')),
);
?>

<h1>Update Personals <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>