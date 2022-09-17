<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','reset','update4'),
				'users'=>array('*'),
			),
			array('allow', 
		'actions'=>array('index','view','viewresult','create','update','admin','delete'),
		'expression'=>'$user->getLevel()<=1',
	),
			array('allow',  // allow all users to perform 'index' and 'view' actions
			'actions'=>array('create'),
			'users'=>array('*'),
			),
		
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('settingdsn','viewpdsn','viewxdsn','admin2dsn','updatedsn1','admin4'),
			'expression'=>'$user->isMemberPasien()',
	                ),					
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update','update2','viewx2','admin2','viewx','update3','viewupdated','admindosen','viewme','adminnonaktif','adminadm','viewme2','viewme3','viewme4'),
			'expression'=>'$user->isAdmin()',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */


	 public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
		public function actionViewUpdated($id)
	{
		$this->render('viewupdated',array(
			'model'=>$this->loadModel($id),
		));
	}
	
public function actionViewResult($id)
	{
		$this->render('viewresult',array(
			'model'=>$this->loadModel($id),
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$model->scenario='Pasien';
		$model->level='Pasien';
		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_user));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

		public function actionCreate2()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$model->scenario='Admin';
		$model->level='Admin';
		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('viewme4','id'=>$model->id_user));
		}

		$this->render('create2',array(
			'model'=>$model,
		));
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
				if($model->save())
	$this->redirect(array('viewupdated','id'=>$model->id_user));
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}
	

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->scenario='MAHASISWA';
		$model->level='MAHASISWA';// clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];
		$this->render('admin',array(
			'model'=>$model,
		));
	}  

public function actionAdminpasien()
	{
		$model=new Users('search');
		$model->scenario='Dosen';
		$model->level='Dosen';// clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];
		$this->render('adminpasien',array(
			'model'=>$model,
		));
	}  
	
	public function actionAdminNonaktif()
	{
		$model=new Users('search');
		$model->scenario='Guest';
		$model->level='Guest';// clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];
		$this->render('adminnonaktif',array(
			'model'=>$model,
		));
	}  
	
		public function actionChangepassword($username){
    $model = new PasswordForm;
    $modeluser = $this->loadModel(Yii::app()->user->id);
    if (isset($_POST['PasswordForm'])){
        $old = 'Helloword'.sha1($_POST['PasswordForm']['oldpass']);
        $new = 'Helloword'.sha1($_POST['PasswordForm']['newpass']);
        $konfirm = 'Helloword'.sha1($_POST['PasswordForm']['confirm']);
        if ($modeluser->password===$old){
            if ($old!=$new){
                if($new===$konfirm){
                    $modeluser->password=$new;
                    if($modeluser->save()){
                        $this->redirect(Yii::app()->homeUrl);
                    }
                } else{
                    Yii::app()->user->setFlash('error','Silahkan konfirmasi password baru Anda!');
                }
            } else{
                Yii::app()->user->setFlash('error','Maaf, password baru tidak boleh sama dengan password lama!');
            }
        }else{
            Yii::app()->user->setFlash('error','Periksa kembali password lama Anda!');
        }
    }
        $this->render('changepassword',array(
            'model'=>$model,
        ));
}
	
	// 	public function actionAdminadm()
	// {
	// 	$model=new Users('search');
	// 	$model->scenario='Admin';
	// 	$model->level='Admin';// clear any default values
	// 	if(isset($_GET['Users']))
	// 		$model->attributes=$_GET['Users'];
	// 	$this->render('adminadm',array(
	// 		'model'=>$model,
	// 	));
	// } 
		
		public function actionViewX($id)
	{
		$this->render('viewx',array(
			'model'=>$this->loadModel($id),
		));
	}
			public function actionViewme($id)
	{
		$this->render('viewme',array(
			'model'=>$this->loadModel($id),
		));
	}
			public function actionViewme2($id)
	{
		$this->render('viewme2',array(
			'model'=>$this->loadModel($id),
		));
	}
			public function actionViewme3($id)
	{
		$this->render('viewme3',array(
			'model'=>$this->loadModel($id),
		));
	}
			public function actionViewme4($id)
	{
		$this->render('viewme4',array(
			'model'=>$this->loadModel($id),
		));
	}	
	public function actionUpdate2($id)
	{
			$model=$this->loadModel($id);
	$model->scenario='AKTIF';
		$model->status='AKTIF';
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			$picture=CUploadedFile::getInstance($model,'picture');
			$model->picture=CUploadedFile::getInstance($model,'picture');
			if($model->save()){
	$this->redirect(array('viewresult','id'=>$model->id_user));
		}
	}
		$this->render('update2',array(
			'model'=>$model,
		));
	}
	
	
	public function actionUpdate3($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			$picture=CUploadedFile::getInstance($model,'picture');
			$model->picture=CUploadedFile::getInstance($model,'picture');
			if($model->save()){
				$picture->saveAs(Yii::app()->basePath.'/../picture/'.$model->id_user.'jpg');
	$this->redirect(array('viewresult','id'=>$model->id_user));
		}
	}
		$this->render('update3',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin2()
	{
		$model=new Users('search');
		$model->unsetAttributes(); 
	$model->username=Yii::app()->user->name;		// clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];
		$this->render('admin2',array(
			'model'=>$model,
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
