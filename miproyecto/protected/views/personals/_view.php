<?php
/* @var $this PersonalsController */
/* @var $data Personals */
?>

<div class="media">
	<div class="media-body">
		<h4 class="media-heading">
			<?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>: <?php echo CHtml::encode($data->rut); ?>
		</h4>
	</div>

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?> <?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />
</div>