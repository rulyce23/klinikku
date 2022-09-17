<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $nama
 * @property string $jk
 * @property string $pendidikan
 * @property string $telepon
 * @property string $email
 * @property string $username
 * @property string $password
 * @property integer $level
 * @property string $status
 * @property string $picture
 */
class Users extends CActiveRecord
{
     public $verifyCode;
     public $user;
	 public $password;
	 public $password_repeat;
	 public $pwd_hash;
	 
	  protected function afterValidate() {
            parent::afterValidate();
            
            //melakukan enkripsi pada data yang di input
            $this->password = $this->encrypt($this->password);
        }
        
	private function getHashString($string){
        $result = base_convert(md5($string), 16, 36);
        return $result;
    }

        //membuat sebuah fungsi enkripsi
        public function encrypt($value){
            return md5($value);
        }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}
	
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jk, telepon, email, username, password,', 'required', 
			'on'=>'create'),
			array('categoryName','safe'),
			//array('nrp_nidn,level, password','required','on'=>'update2'),
			array('jk', 'length', 'max'=>9),
			array('level', 'length', 'max'=>10),
			array('telepon', 'length', 'max'=>20),
			array('email, password', 'length', 'max'=>100),
			array('username', 'length', 'max'=>50),
			array('status', 'length', 'max'=>15),
			array('username',  'match', 'pattern'=>'/^([a-zA-Z .,])+$/','message' =>'{attribute} harus huruf !!'),
			array('username', 'filter', 'filter'=>'strtolower'),
			array('email', 'unique', 'message' =>'{attribute} {value} sudah dipakai'),
			array('email', 'email', 'message' =>'mohon periksa kembali email anda'),
			array('username','unique'),
			array('password', 'length', 'max'=>50,'min'=>5),
        //    array('picture','file','types'=>'png,jpg',
        //     'allowEmpty'=>false,
        //     'maxSize'=>1024*1024*1,
        //     'tooLarge'=>'File terlalu besar, maksimal file 1 MB.',
		// 	'on'=>'update3'),      			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, nama, jk, telepon, email, username, password, level, status','safe', 'on'=>'search'),
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
			'Users' => array(self::BELONGS_TO, 'Pasien','id_user'),
			'BiayaObat'=>array(self::HAS_MANY, 'BiayaObat','id_biaya'),
			 'Pasien'=>array(self::HAS_MANY, 'Pasien','id_pasien'),
			// 'Beritag'=>array(self::HAS_MANY, 'Publish','id_publish'),
			// 'Jurnal'=>array(self::HAS_MANY,'Jurnal','id_user'),
			
		);
	}

	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'id user',
			'nrp_nidn'=>'NRP / NIDN',
			'nama' => 'Nama',
			'jk' => 'Jk',
			'pendidikan' => 'Pendidikan',
			'prodi' => 'Prodi',
			'telepon' => 'Telepon',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'level' => 'Level',
			'status' => 'Status',
			'picture' => 'Picture',
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
        //$criteria->join ="INNER JOIN Jurnal v ON v.id_jurnal=t.id_jurnal";
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('nrp_nidn',$this->nrp_nidn,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jk',$this->jk,true);
		$criteria->compare('pendidikan',$this->pendidikan,true);
		$criteria->compare('prodi',$this->prodi,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('picture',$this->picture,true);
	$criteria->compare('level',$this->level);
	// $criteria->with =array('Jurnal',/*'idJurnal'*/);
		// $criteria->addSearchCondition('Jurnal.kata_kunci',$this->Jurnal);
		// $criteria->addSearchCondition('Jurnal.id_jurnal',$this->Jurnal);
		// $criteria->addSearchCondition('Jurnal.anggota',$this->Jurnal);
		// $criteria->addSearchCondition('Jurnal.judul',$this->Jurnal);
		// $criteria->addSearchCondition('Jurnal.berkas',$this->Jurnal);
		// $criteria->addSearchCondition('Jurnal.kategori',$this->Jurnal);
		// $criteria->addSearchCondition('Jurnal.tgl_diajukan',$this->Jurnal);
	return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
public static function getLevelList(){
          return array(
               'MEMBERPASIEN','GUEST');
    }
}
class LevelLookUp{
      const GUEST ='Guest';
	  const MEMBERPASIEN ='Pasien';
	  const ADMIN  ='Admin';
	  
      // For CGridView, CListView Purposes
	  
      public static function getLabel( $level ){
if($level == self::GUEST)
             return 'GUEST';	 
		 if($level == self::MEMBERPASIEN)
             return 'MEMBERPASIEN';         
		  if($level == self::ADMIN)
             return 'ADMIN';
          return false;
      }
      // for dropdown lists purposes
	public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;		
        //$criteria->join ="INNER JOIN Jurnal v ON v.id_jurnal=t.id_jurnal";
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('nrp_nidn',$this->nrp_nidn,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jk',$this->jk,true);
		$criteria->compare('pendidikan',$this->pendidikan,true);
		$criteria->compare('prodi',$this->prodi,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('picture',$this->picture,true);
	$criteria->compare('level',$this->level);
	// $criteria->with =array('Jurnal',/*'idJurnal'*/);
	// 	$criteria->addSearchCondition('Jurnal.kata_kunci',$this->Jurnal);
	// 	$criteria->addSearchCondition('Jurnal.id_jurnal',$this->Jurnal);
	// 	$criteria->addSearchCondition('Jurnal.anggota',$this->Jurnal);
	// 	$criteria->addSearchCondition('Jurnal.judul',$this->Jurnal);
	// 	$criteria->addSearchCondition('Jurnal.berkas',$this->Jurnal);
	// 	$criteria->addSearchCondition('Jurnal.kategori',$this->Jurnal);
	// 	$criteria->addSearchCondition('Jurnal.tgl_diajukan',$this->Jurnal);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'distinct'=>array(  
             'select'=>'id_user'
			)
		
		));
	}
	
	  
}
