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

	<div>
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ffiniquito'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'attribute'=>'ffiniquito',
				'model'=>$model,
				'language'=>'es',
				'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'showButtonPanel'=>true,
					'changeYear'=>true,
					'yearRange'=>'-30:+30',
					'minDate'=>'-30Y',
					'maxDate'=>'+30Y',
				)
			));
		?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ecivil'); ?>
		<?php echo $form->dropDownList($model,'ecivil',array('Soltero'=>'Soltero','Casado'=>'Casado','Separado'=>'Separado','Viudo'=>'Viudo'),array('empty'=>'Seleccione')); ?>
		<?php echo $form->error($model,'ecivil'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fnacimiento'); ?>
		<?php echo $form->textField($model,'fnacimiento'); ?>
		<?php echo $form->error($model,'fnacimiento'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'region'); ?>
		<?php echo $form->textField($model,'region',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'region'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'sbase'); ?>
		<?php echo $form->textField($model,'sbase'); ?>
		<?php echo $form->error($model,'sbase'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'sliquido'); ?>
		<?php echo $form->textField($model,'sliquido'); ?>
		<?php echo $form->error($model,'sliquido'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'academico'); ?>
		<?php echo $form->textField($model,'academico',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'academico'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'resena'); ?>
		<?php echo $form->textArea($model,'resena',array('style'=>'width: 600px; height: 80px;')); ?>
		<?php echo $form->error($model,'resena'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'calificacion'); ?>
		<?php echo $form->dropDownList($model,'calificacion',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10')); ?>
		<?php echo $form->error($model,'calificacion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion', array('style'=>'width: 600px; height: 80px;')); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar', array("class"=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->