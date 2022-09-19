<?php

/**
 * This is the model class for table "wilayah".
 *
 * The followings are the available columns in table 'wilayah':
 * @property integer $id_wilayah
 * @property string $nm_wilayah
 * @property string $kodepos
 * @property string $kecamatan
 */
class Wilayah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wilayah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nm_wilayah, kodepos, kecamatan', 'required'),
			array('nm_wilayah', 'length', 'max'=>255),
			array('kodepos', 'length', 'max'=>155),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_wilayah, nm_wilayah, kodepos, kecamatan', 'safe', 'on'=>'search'),
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
			 'Wilayah' => array(self::HAS_MANY, 'CatatanMedis','id_wilayah'),
			 
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_wilayah' => 'Id Wilayah',
			'nm_wilayah' => 'Nm Wilayah',
			'kodepos' => 'Kodepos',
			'kecamatan' => 'Kecamatan',
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

		$criteria->compare('id_wilayah',$this->id_wilayah);
		$criteria->compare('nm_wilayah',$this->nm_wilayah,true);
		$criteria->compare('kodepos',$this->kodepos,true);
		$criteria->compare('kecamatan',$this->kecamatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Wilayah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
