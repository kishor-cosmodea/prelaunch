<?php
	
	define('GUSER', 'admin@cosmodea.com'); // GMail username
	define('GPWD', 'cosmodeagn'); // GMail password

	$name=$_REQUEST['name'];
	$mobile=$_REQUEST['mobile'];
	$email=$_REQUEST['email'];
	$city=$_REQUEST['city'];
	$redirect=$_REQUEST['location'];
	
	if($name==""||$mobile==""||$email=="")
	{	

		//echo "<script type='text/javascript'>alert('Please fill Name, E-mail & Mobile');</script>";

		if($redirect=="")
		 { 
		 	//echo "<script type='text/javascript'>alert('Please fill Name, E-mail & Mobile');</script>";
			header('Location:contact-us.php');
		}
		else
		{
			 header('Location:'.$redirect);
		}
	}
	else
	{ echo "<script type='text/javascript'>alert('aa');</script>";
		require("assets/vendor/PHPMailer_5.2.0/class.phpmailer.php");
		
		function smtpmailer($to, $from, $from_name, $subject, $body) 
		{ 
			global $error;
			$mail = new PHPMailer();  // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->IsHTML(true);
			$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true;  // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465; 
			$mail->Username = GUSER;  
			$mail->Password = GPWD;           
			$mail->SetFrom($from, $from_name);
			$mail->Subject = $subject;
			$mail->Body = $body;
			$mail->AddAddress($to);
			if(!$mail->Send()) 
			{
				$error = 'Mail error: '.$mail->ErrorInfo; 
				return false;
			} 
			else 
			{
				$error = 'Message sent!';
				return true;
			}
		}
		
			$to = 'admin@cosmodea.com';
			$subject = 'Enquiry: Prelaunch';
			$sender=$email;
			$from_name=$name;
	
			$message = '<strong>From : </strong>'.$from_name.' ('.$sender.')'.'<br/> <strong>Mobile : </strong>'.$mobile.'<br/> <strong> City : </strong>'.$city;
	
			smtpmailer( $to, $sender, $from_name , $subject , $message);
			echo "mail sent";
			echo "<script type='text/javascript'>alert('Thank you..!!');</script>";
			header('Location:index.php');
	}

?>
