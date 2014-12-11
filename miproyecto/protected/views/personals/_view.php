<?php
/* @var $this PersonalsController */
/* @var $data Personals */
?>

<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ffiniquito')); ?>:</b>
	<?php echo CHtml::encode($data->ffiniquito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecivil')); ?>:</b>
	<?php echo CHtml::encode($data->ecivil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fnacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fnacimiento); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($data->region); ?>
	<br />
	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sbase')); ?>:</b>
	<?php echo CHtml::encode($data->sbase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sliquido')); ?>:</b>
	<?php echo CHtml::encode($data->sliquido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resena')); ?>:</b>
	<?php echo CHtml::encode($data->resena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calificacion')); ?>:</b>
	<?php echo CHtml::encode($data->calificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	*/ ?>

</div>