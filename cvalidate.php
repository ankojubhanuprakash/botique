<?php
//7799037833
$button=isset($_POST['button']);
if($button){
	session_start();
$orderid= $_SESSION['dressid'];
	$name=$_POST['name'];
	$cellno=$_POST['cell'];
	$nation=$_POST['year'];
$email=$_POST['email'];
	$content=$_POST['adress'];
	echo $email;   
$to = $email;
$subject = 'Request Order';
$from = "ankojubhanuprakash@gmail.com";
$imgsrc="http://saanvivarna.pe.hu/"."$orderid";
$logsrc="http://saanvivarna.pe.hu/gallery/saanvivarna.png";
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" ;
//    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<img src="'.$logsrc.'" height="400" width="400" >';
$message .= '<h1 style="color:#f40;">Hi!!</h1>';
$message .= '<img src="'.$imgsrc.'" height="200" width="200" >';
$message .= '<p style="color:#f40;">your order has been placed ,we will approach you as soon as possible<br>your order:</p>';
$message .= '<a href="http://mrinalini.esy.es/img/img5.jpg">clickme</a>';
$message .= '</body></html>';
 
// Sending email
/*if(mail($to, $subject, $message, $headers)){
    echo 'Your order is placed';
	    unset($_SESSION['dressid']);
		echo '<script> setTimeout("window.close();", 5000);</script>';
} else{
    echo 'Serverdown please try after some time ';unset($_SESSION['dressid']);echo '<script> setTimeout("window.close();", 5000);</script>';
}*/                       






	
	
}
?>