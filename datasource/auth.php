<?php
session_start();
if(isset($_POST['login'])) {

	$response = $devless->call('devless', 'login', ['',$_POST['email'],'',$_POST['password']]);
	if($response){
		if($response['payload']['result']['profile']['first_name'] == 'paid' ){
			$login_successful = true;
      $_SESSION['user_token'] = $response['payload']['result']['token'];
			$_SESSION['user_profile'] = $response['payload']['result']['profile'];

			$_SESSION['notify_message'] = 'Welcome to the club';
			$_SESSION['notify_color'] = '#a6fb86';

			header('Location:/');
		} else {
     		$_SESSION['notify_message'] = 'Hmm could not login you in please check your email/password';
			$_SESSION['notify_color'] = '#fb8686';
	}
	}
}

if(isset($_SESSION['user_token'])) {
//  die($_SESSION['user_token']);
	$devless->setUserToken($_SESSION['user_token']);
	$_SESSION['user_token'] = (isset($devless->call('devless', 'profile', [])['payload']['error']))? $_SESSION['user_token'] : false;
}


if(isset($_GET['logout'])) {
	$devless->setUserToken($_SESSION['user_token']);
	$devless->call('devless', 'logout', []);
	$_SESSION['user_token'] = $_SESSION['user_profile'] = null;
	header('Location:/login-register.php');
}
