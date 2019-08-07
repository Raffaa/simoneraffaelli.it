<?php
define('URL', 'lenses.simoneraffaelli.it');

if(isset($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
    }
    else
        $captcha = false;

    if(!$captcha){
        header("Location: ./?error");
		die();
    }
    else{
        $secret = '6LepnZsUAAAAAHjYlqqUTXsT6N2P-LSHJVfWWL1j';
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=
            .$secret.&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
            header("Location: ./?bot");
			die();
        }
    }

	$email = "raffinatodev@gmail.com";
	$subject = "Automated Email - Feedback from Contact Lens Timer";
	$message = $_POST['name']." - ".$_POST['feedback'];

$sendMail = mail($email, $subject, $message);
	if($sendMail)
	{
		header("Location: ./?emailSentSuccesfully");
		die();
	}
	else

	{
		header("Location: ./?emailFail");
		die();
	}
?>
