<?php

/**
 * This is the model class for table "obat".
 *
 * The followings are the available columns in table 'obat':
 * @property integer $id_obat
 * @property string $nm_obat
 * @property string $jenis_obat
 * @property double $harga
 * @property string $aturan_pakai
 */
class Obat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'obat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nm_obat, jenis_obat, harga, aturan_pakai', 'required'),
			array('harga', 'numerical'),
			array('nm_obat', 'length', 'max'=>155),
			array('nm_pasien', 'length', 'max'=>155),
			array('jenis_obat', 'length', 'max'=>100),
			array('aturan_pakai', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_obat, nm_obat,nm_pasien, jenis_obat, harga, aturan_pakai', 'safe', 'on'=>'search'),
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
			 'Pasien' => array(self::HAS_MANY, 'Pasien','id_pasien'),
			 'BiayaObat'=>array(self::BELONGS_TO, 'BiayaObat','id_biaya'),
			
		);
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_obat' => 'Id Obat',
			'nm_obat' => 'Nm Obat',
			'jenis_obat' => 'Jenis Obat',
			'harga' => 'Harga',
			'aturan_pakai' => 'Aturan Pakai',
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

		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('nm_obat',$this->nm_obat,true);
		$criteria->compare('jenis_obat',$this->jenis_obat,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('aturan_pakai',$this->aturan_pakai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Obat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
