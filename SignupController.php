<?php
require_once 'User.php';
require_once 'UserDao.php';
require_once 'UserDaoImpl.php';
require_once 'UserNotFoundException.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmPassword'];
	$email = $_POST['email'];
	$username =trim($username);
	$password =trim($password);
	$confirmpassword =trim($confirmpassword);
	$email=trim($email);
	if(strcmp($password,$confirmpassword)!=0)
	{
		if(strlen($password)<8)
		{
			
			header("Location:signup.php?username=$username&email=$email&message=Password must atleast 8 characters");
			die();
			exit;
		}
		header("Location:signup.php?username=$username&email=$email&message=Password dont match");
		die();
		exit;
	}
	$user = new User($username,$password,$email);
	$userDao = new UserDaoImpl();
	$message = false;

	try
	{
		$userDao->insert($user);
		header("Location: Login.php");
		exit;

	}
	catch(Exception $e)
	{ 
		
			if($e instanceof UserFoundException) 
			{
				$_POST['message'] = "Username already exists";
				header("Location:signup.php?message=Username already exists");
			}
			if ( $e instanceof EmailFoundException) 
			{
				$_POST['message'] = "Email already exists";
				header("Location:signup.php?message=Email already exists");
			}
		
			else
			{
				throw $e;
			}
		
	}
}

	else
	{
		header("Location:signup.php");
		exit;	
	}

?>
