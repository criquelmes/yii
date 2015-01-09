<?php
/* @var $this PersonalsController */
/* @var $model Personals */

$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Mostrando detalle de <b>Rut</b>: <?php echo $model->rut; ?></h1>

<div class="row pull-right" >
	<div class="col-xs-6 col-md-3">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo str_replace('.', '', $model->rut);?>.jpg" alt="..." class="thumbnail img-retrato">
	</div>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped", "id"=>"tbl_details"),
	'attributes'=>array(
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
		'academico',
		'resena',
		'calificacion',
		'observacion',
	),
)); ?>
