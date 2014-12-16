<?php
/* @var $this PersonalsController */
/* @var $model Personals */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Volver a Lista', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personals-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Personal</h1>



<?php echo CHtml::link('Buscar','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personals-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',*/
		'rut',
		'nombre',
		'apellido',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
