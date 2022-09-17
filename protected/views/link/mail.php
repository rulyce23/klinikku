<?php
error_reporting(0);

function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}

include 'config.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$id = rand_string( 10 );
if (!isset($nama)) {
echo "Lengkap form";
}
elseif (!isset($email)) {
	echo "Lengkapi form";
} 
else {

	// cek apakah email sudah terdaftar
	$query = "SELECT email FROM User WHERE email='$email'";
	$find = mysqli_query($query);

		//$add = "insert into User set id='$id', name='$nama', email='$email', confirm='no'";
		$set = mysqli_query($add);
		if ($set) {

		} else {

		}
		require_once('protected/extensions/mailer/phpmailer/class.phpmailer.php'); //menginclude librari phpmailer

		$mail             = new PHPMailer();
		$body             = 
		"<body style='margin: 10px;'>
		<div style='width: 640px; font-family: Helvetica, sans-serif; font-size: 13px; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
		<br>
		<strong>Reset Password</strong><br>
		<b>Nama Anda : </b>".$nama."<br>
		<b>Email : </b>".$email."<br>
		<b>reset password link =http://localhost/jurnal/index.php?r=user/reset<br>
		<br>
		</div>
		</body>";
		$mail->IsSMTP();
	    $mail->IsHTML(true);
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		//$mail->Host 	= '49.xxx.xxx.xxx'; // Gunakan Ip Shared Address Hosting Anda
		$mail->Port       = 465;  // post gunakan port 25
		$mail->Username   = "emailpercobaanprodi@gmail.com"; // username email akun
		$mail->Password   = "emailpercobaan212";        // password akun
		$mail->SetFrom('alvinrizqikoswara.ark@gmail.com', 'Ruly Rizki Paling Kasep');

		$mail->Subject    = "Hello";
		$mail->MsgHTML($body);

		$address = $email; //email tujuan
		$mail->AddAddress($address, "Hello (Receiver name)");

		if(!$mail->Send()) {
			echo "Oops, Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Mail Sukses";
         
		}
	}
require_once "Twilio/autoload.php";
			$sid = "AC7d3b90f857197b63e4fce3cfdd642705"; // Your Account SID from www.twilio.com/console
$token = "9f1f4aaf83af80d3095cf8ecdf1ac19a"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);

$message = $client->messages->create(
  '08122053929', // Text this number
  array(
    'from' => '+14153013487', // From a valid Twilio number
    'body' => 'Hello from Twilio!'
  )
);

print $message->sid;

?>
