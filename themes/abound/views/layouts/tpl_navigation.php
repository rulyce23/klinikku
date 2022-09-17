	 
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
	
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">E-Klinik</a>
			
          <div class="nav-collapse">

			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,

                    'items'=>array(
                        array('label'=>'Beranda', 'url'=>array('/site/index')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'&nbsp;Kelola <span class="caret"></span>', 'url'=>'#','visible'=>Yii::app()->user->isAdmin(),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
				array('label'=>'Kelola Wilayah ', 'url'=>array('wilayah/admin'),'visible'=>Yii::app()->user->isAdmin()),
                array('label'=>'Kelola Dokter ', 'url'=>array('dokter/admin'),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Kelola Pasien', 'url'=>array('pasien/admin'),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Kelola Obat ', 'url'=>array('obat/admin'),'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Kelola Tindakan Catatan Medis', 'url'=>array('catatanMedis/admin'),'visible'=>Yii::app()->user->isAdmin()),
					
            )),
                        array('label'=>'&nbsp;Kelola <span class="caret"></span>', 'url'=>'#','visible'=>Yii::app()->user->isMemberPasien(),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
				array('label'=>'Lihat Riwayat Medis ', 'url'=>array('catatanMedis/adminview'),'visible'=>Yii::app()->user->isMemberPasien()),
                array('label'=>'Daftar Sebagai Pasien ', 'url'=>array('pasien/create2'),'visible'=>Yii::app()->user->isMemberPasien()),
					
            )),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
	</div>
		 
<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
       <p>
			
            
           </form>
    <!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->
