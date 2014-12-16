<?php
/* @var $this PersonalsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personal',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Personal contrato SC-064</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
