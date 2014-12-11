<?php
/* @var $this PersonalsController */
/* @var $model Personals */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personals-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ffiniquito'); ?>
		<?php echo $form->textField($model,'ffiniquito'); ?>
		<?php echo $form->error($model,'ffiniquito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecivil'); ?>
		<?php echo $form->textField($model,'ecivil',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'ecivil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fnacimiento'); ?>
		<?php echo $form->textField($model,'fnacimiento'); ?>
		<?php echo $form->error($model,'fnacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region'); ?>
		<?php echo $form->textField($model,'region',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'region'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sbase'); ?>
		<?php echo $form->textField($model,'sbase'); ?>
		<?php echo $form->error($model,'sbase'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sliquido'); ?>
		<?php echo $form->textField($model,'sliquido'); ?>
		<?php echo $form->error($model,'sliquido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resena'); ?>
		<?php echo $form->textField($model,'resena',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'resena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calificacion'); ?>
		<?php echo $form->textField($model,'calificacion'); ?>
		<?php echo $form->error($model,'calificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->