<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear Nuevo',
);

$this->menu=array(
	array('label'=>'Ver Listado de Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Crear Nuevo</h1>
<div style="padding-bottom: 416px;">
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>