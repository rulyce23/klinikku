<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property integer $id_pasien
 * @property string $tgl_masuk
 * @property string $nm_pasien
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $jk
 * @property string $agama
 * @property string $goldar
 * @property string $telepon
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tgl_masuk, nm_pasien, tempat_lahir, tgl_lahir, jk, agama, goldar,id_user, telepon', 'required'),
			array('nm_pasien', 'length', 'max'=>155),
			array('tempat_lahir', 'length', 'max'=>100),
			array('jk', 'length', 'max'=>1),
			array('agama', 'length', 'max'=>25),
			array('goldar', 'length', 'max'=>45),
			array('telepon', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pasien, tgl_masuk, nm_pasien, tempat_lahir, tgl_lahir, jk, agama, goldar, telepon', 'safe', 'on'=>'search'),
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
			 'Pasien' => array(self::BELONGS_TO, 'Obat','id_pasien'),
			
		);
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pasien' => 'Id Pasien',
			'id_user'=> "Id User",
			'tgl_masuk' => 'Tgl Masuk',
			'nm_pasien' => 'Nm Pasien',
			'tempat_lahir' => 'Tempat Lahir',
			'tgl_lahir' => 'Tgl Lahir',
			'jk' => 'Jk',
			'agama' => 'Agama',
			'goldar' => 'Goldar',
			'telepon' => 'Telepon',
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

		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('tgl_masuk',$this->tgl_masuk,true);
		$criteria->compare('nm_pasien',$this->nm_pasien,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('jk',$this->jk,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('goldar',$this->goldar,true);
		$criteria->compare('telepon',$this->telepon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
