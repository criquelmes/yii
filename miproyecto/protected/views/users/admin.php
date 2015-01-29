<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Ver Listado de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear nuevo Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Usuarios</h1>

<p>
Puede especificar el valor de búsqueda según el criterio de cada Campo.
</p>

<!--<?php #echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php #$this->renderPartial('_search',array(
	#'model'=>$model,
#)); ?>
</div> --><!-- search-form -->
<div style="padding-bottom: 61px;">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'username',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>