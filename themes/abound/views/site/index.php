<html>
<body>
<div class="flash-info round">
				Silahkan Login Dengan Username dan Password Yang Telah Di Daftarkan.  <p class="hint">
			Belum Punya Akun? <kbd><?php echo CHtml::link('Buat Akun', array('users/create'));?></kbd>.
		</p>
				</div>
				<?php
 foreach (Yii::app()->user->getFlashes() as $key=>$message){
?>
    <div class="alert alert-<?php echo $key; ?>
"><?php echo $message; ?></div>
<?php
    }

?>
<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'SELAMAT DATANG',
		));
		
?>

<style type="text/css">
#return-to-top {
    position: fixed;
    bottom: 100px;
    right: 10px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 60px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color:white;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color:blue;
    top: 5px;
}


/* Extra Things */
body{font-family: 'Open Sans', sans-serif;}h3{font-size: 30px; font-weight: 400;text-align: center;margin-top: 50px;}h3 i{color: #444;}
</style>
<br><br><br>
<center><h1>SELAMAT DATANG DI E-Klinik Rulz.Co</h1>
<script type="application/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
<style type="text/css">

#tooltip{
position: absolute;
left: - 250px;
width: 250px;
border: 1px solid black;
padding: 2px;
background-color: lightblue;
visibility: hidden;
z-index: 100;
/*Remove below line to remove shadow. Below line should always appear last within this CSS*/
filter: progid:DXImageTransform.Microsoft.Shadow(color=gray,direction=135);
}

#pointer{
position:absolute;
left: -300px;
z-index: 101;
visibility: hidden;
}

</style>


               
                    <a href="#"/><img src="icon/klinikku.png" width="100" height="100"/></a>
                
       
           </form>
		   <br><br>
<p>  Tentang Klinik :</p>
<p>Klinik adalah suatu fasilitas kesehatan publik kecil yang didirikan untuk memberikan perawatan kepada pasien luar. Biasanya klinik hanya mengobati penyakit-penyakit ringan seperti demam dan sebagainya, sedangkan kasus-kasus yang lebih parah diajukan ke rumah sakit</p>
</body>
</html>
<?php 
$this->endWidget();
?>

<a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>
<!--  -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!---->


