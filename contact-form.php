<?php
	$flag=false;
	if(isset($_POST['email']) && isset($_POST['submit']) && $_POST['email'] != ''){
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$email=$_POST['email'];
			$msg=$_POST['comment'];

			$to='saket0565@gmail.com'; // Receiver Email ID, Replace with your email ID
			$subject='Form Submission';
			$message="Name : ".$firstname." ".$lastname."\n"."Email : ".$email."\n"."Message :"."\n".$msg;

			if(mail($to, $subject, $message)){
				header('Location: message.html');
				$flag=true;
			}
		}
	}
	if($flag==false){
		header('Location: Contact.html');
	}
?>