<?php

/**
 * This is the model class for table "catatan_medis".
 *
 * The followings are the available columns in table 'catatan_medis':
 * @property integer $id_medis
 * @property integer $id_pasien
 * @property integer $id_dokter
 * @property integer $id_wilayah
 * @property integer $id_obat
 * @property string $diagnosa
 * @property string $tgl_tindakan
 * @property string $diagnosa_final
 * @property string $tgl_selesai
 */
class CatatanMedis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'catatan_medis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pasien, id_dokter, id_wilayah, id_obat,id_biaya, diagnosa, tgl_tindakan, diagnosa_final', 'required'),
			array('id_pasien, id_dokter, id_wilayah, id_obat, id_biaya', 'numerical', 'integerOnly'=>true),
			array('diagnosa, diagnosa_final', 'length', 'max'=>155),
			array('tgl_tindakan', 'length', 'max'=>10),
			array('jam_selesai', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_medis, id_pasien, id_dokter, id_wilayah, id_obat,id_biaya,id_user,diagnosa, tgl_tindakan, diagnosa_final, jam_selesai', 'safe', 'on'=>'search'),
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
			 'User' => array(self::BELONGS_TO, 'Users','id_user'),
			 'Obat'=>array(self::BELONGS_TO, 'Obat','id_obat'),
			 'Dokter'=>array(self::BELONGS_TO, 'Dokter','id_dokter'),
			 'Pasien'=>array(self::BELONGS_TO, 'Pasien','id_pasien'),
			 'Wilayah'=>array(self::BELONGS_TO,'Wilayah','id_wilayah'),
			 'Biaya'=>array(self::BELONGS_TO,'BiayaObat','id_biaya'),
			
		);
	}

	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_medis' => 'Id Medis',
			'id_pasien' => 'Id Pasien',
			'id_dokter' => 'Id Dokter',
			'id_wilayah' => 'Id Wilayah',
			'id_biaya' => 'Id Biaya',
			'id_obat' => 'Id Obat',
			'diagnosa' => 'Diagnosa',
			'tgl_tindakan' => 'Tgl Tindakan',
			'diagnosa_final' => 'Diagnosa Final',
			'jam_selesai' => 'Jam Selesai',
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

		$criteria->compare('id_medis',$this->id_medis);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('id_dokter',$this->id_dokter);
		$criteria->compare('id_wilayah',$this->id_wilayah);
		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('diagnosa',$this->diagnosa,true);
		$criteria->compare('tgl_tindakan',$this->tgl_tindakan,true);
		$criteria->compare('diagnosa_final',$this->diagnosa_final,true);
		$criteria->compare('jam_selesai',$this->jam_selesai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CatatanMedis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
