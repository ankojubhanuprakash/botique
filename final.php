<?php
$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
session_start();
$button=isset($_POST['button']);
               if(($button)&&(isset($_SESSION["loginname"]))){
                           $email=$_SESSION["loginname"];
                           $get=mysqli_query($con,"SELECT * FROM userver WHERE username='$email' ");
                           $get2= mysqli_fetch_assoc($get);
						   $getline1=$get2['line1'];
						   $postline1=$_POST['flat'];
						   $postline2=$_POST['street'];
						   $pcity=$_POST['city'];
						   $pstate=$_POST['state'];
						   $ppincode=$_POST['pincode'];
                            $orderid=$_POST['fileid'];	
echo $orderid;							
								  if(($postline1!=$getline1)||($getline1==NULL)){
											   $ins=mysqli_query($con," UPDATE userver SET line1='$postline1',line2='$postline2',city='$pcity',state='$pstate',pin='$ppincode' WHERE username='$email'   ");
										   }
	                        $logsrc="http://saanvivarna.pe.hu/gallery/saanvivarna.png";
							$imgsrc="http://mrinalini.esy.es"."$orderid";
							$to = $email;
                            $subject = 'Request Order';
                            $from = "ankojubhanuprakash@gmail.com";
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

                        if(mail($to, $subject, $message, $headers)){
    echo 'Your order is placed';
	    
		echo '<script> setTimeout("window.close();", 5000);</script>';
} else{
    echo 'Serverdown please try after some time ';
	echo '<script> setTimeout("window.close();", 5000);</script>';
}
	
}
?>