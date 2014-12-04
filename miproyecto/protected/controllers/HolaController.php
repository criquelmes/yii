<?php
#http://localhost:8080/yii/miproyecto/hola/index
	class HolaController extends Controller
	{
		public function actionIndex()
		{
			$model=CActiveRecord::model("Users")->findAll();
			$twitter="@criquelmes";
			$this->render("Index", array("model"=>$model,"twitter"=>$twitter));
		}
	}