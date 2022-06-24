<?php

$myusername = "farhan@gmail.com";
$mypass = "12345";
if(isset($_POST['login'])) {
	$username = $_POST['username'];
	$pass = $_POST['password'];
	if($username == $myusername and $pass == $mypass) {
		

		if(isset($_POST['remember'])) {
			setcookie('username', $username, time() +60*60*7);
		}
			session_start();
			$_SESSION['username'] = $username;
			header("location:welcome.php");
		
	}
	else {
		echo "Username or password is invalid.<br> click here to <a href = 'login.php'>try again</a>";
	}

}
else {
	header ("location: login.php");
}
?>