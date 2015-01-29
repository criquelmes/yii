<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Ver Listado de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear nuevo', 'url'=>array('create')),
	array('label'=>'Ver Detalle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Actualizar datos del Usuario: <?php echo $model->id; ?></h1>
<div style="padding-bottom: 416px;">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>