<?php 
class MyValidator extends CValidator
{
	public $word="";
	public function validateAttribute($object, $attribute)
	{
		if($object->$attribute==$this->word)
			$this->addError($object,$attribute, "Error en el ingreso.");
	}
}