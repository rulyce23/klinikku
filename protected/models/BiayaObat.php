<?php

/**
 * This is the model class for table "biaya_obat".
 *
 * The followings are the available columns in table 'biaya_obat':
 * @property integer $id_biaya
 * @property integer $id_pasien
 * @property integer $id_obat
 * @property string $jenis_obat
 * @property double $harga
 * @property string $jumlah
 * @property double $harga_total
 */
class BiayaObat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'biaya_obat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pasien, id_obat, harga, jumlah, harga_total', 'required'),
			array('id_pasien, id_obat', 'numerical', 'integerOnly'=>true),
			array('harga, harga_total', 'numerical'),
			array('jumlah', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_biaya, id_pasien, id_obat, harga, jumlah, harga_total', 'safe', 'on'=>'search'),
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
			 'User' => array(self::HAS_MANY, 'Users','id_user'),
			 'Obat'=>array(self::BELONGS_TO, 'Obat','id_obat'),
			 'Pasi'=>array(self::BELONGS_TO, 'Pasien','id_pasien'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_biaya' => 'Id Biaya',
			'id_pasien' => 'Id Pasien',
			'id_obat' => 'Id Obat',
			'harga' => 'Harga',
			'jumlah' => 'Jumlah',
			'harga_total' => 'Harga Total',
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

		$criteria->compare('id_biaya',$this->id_biaya);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('jumlah',$this->jumlah,true);
		$criteria->compare('harga_total',$this->harga_total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BiayaObat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
