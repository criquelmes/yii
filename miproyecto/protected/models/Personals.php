<?php

/**
 * This is the model class for table "personal".
 *
 * The followings are the available columns in table 'personal':
 * @property integer $id
 * @property string $rut
 * @property string $nombre
 * @property string $apellido
 * @property string $ffiniquito
 * @property string $ecivil
 * @property string $fnacimiento
 * @property string $ciudad
 * @property string $region
 * @property string $cargo
 * @property integer $sbase
 * @property integer $sliquido
 * @property string $telefono
 * @property string $mail
 * @property string $resena
 * @property integer $calificacion
 * @property string $observacion
 */
class Personals extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, nombre, apellido', 'required'),
			array('sbase, sliquido, calificacion', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>12),
			array('nombre, apellido, ecivil, ciudad, region, cargo, mail', 'length', 'max'=>128),
			array('telefono', 'length', 'max'=>10),
			array('resena, observacion', 'length', 'max'=>256),
			array('ffiniquito, fnacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rut, nombre, apellido, ffiniquito, ecivil, fnacimiento, ciudad, region, cargo, sbase, sliquido, telefono, mail, resena, calificacion, observacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rut' => 'Rut',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'ffiniquito' => 'Fecha de finiquito',
			'ecivil' => 'Estado Civil',
			'fnacimiento' => 'Fecha Nacimiento',
			'ciudad' => 'Ciudad',
			'region' => 'Region',
			'cargo' => 'Cargo',
			'sbase' => 'Sueldo Base',
			'sliquido' => 'Sueldo Líquido',
			'telefono' => 'Teléfono',
			'mail' => 'Email',
			'resena' => 'Reseña',
			'calificacion' => 'Calificación',
			'observacion' => 'Observación',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('ffiniquito',$this->ffiniquito,true);
		$criteria->compare('ecivil',$this->ecivil,true);
		$criteria->compare('fnacimiento',$this->fnacimiento,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('sbase',$this->sbase);
		$criteria->compare('sliquido',$this->sliquido);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('resena',$this->resena,true);
		$criteria->compare('calificacion',$this->calificacion);
		$criteria->compare('observacion',$this->observacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personals the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
