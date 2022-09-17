<?php

/**
 * This is the model class for table "dokter".
 *
 * The followings are the available columns in table 'dokter':
 * @property integer $id_dokter
 * @property string $nm_dokter
 * @property string $alamat_dokter
 * @property string $telepon
 * @property string $spesialis
 * @property string $tarif
 */
class Dokter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dokter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nm_dokter, alamat_dokter, telepon, spesialis, tarif', 'required'),
			array('nm_dokter', 'length', 'max'=>155),
			array('telepon', 'length', 'max'=>13),
			array('spesialis', 'length', 'max'=>70),
			array('tarif', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_dokter, nm_dokter, alamat_dokter, telepon, spesialis, tarif', 'safe', 'on'=>'search'),
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
			'id_dokter' => 'Id Dokter',
			'nm_dokter' => 'Nm Dokter',
			'alamat_dokter' => 'Alamat Dokter',
			'telepon' => 'Telepon',
			'spesialis' => 'Spesialis',
			'tarif' => 'Tarif',
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

		$criteria->compare('id_dokter',$this->id_dokter);
		$criteria->compare('nm_dokter',$this->nm_dokter,true);
		$criteria->compare('alamat_dokter',$this->alamat_dokter,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('spesialis',$this->spesialis,true);
		$criteria->compare('tarif',$this->tarif,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dokter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
