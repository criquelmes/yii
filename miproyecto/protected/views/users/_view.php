<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="media">
	<a class="pull-left" href="#">
		<img class="media-object" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/classic/img/64x64.jpg">
	</a>
	<div class="media-body">
		<h4 class="media-heading">
			<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
			<?php echo CHtml::encode($data->username); ?>	
		</h4>
		<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
		<?php echo CHtml::encode($data->password); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
		<?php echo CHtml::encode($data->email); ?>
		<br />
	</div>
</div>
<br />