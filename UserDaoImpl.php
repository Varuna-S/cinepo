<?php
	require_once 'DatabaseUtilities.php';
	require_once 'UserNotFoundException.php';
	require_once 'UserFoundException.php';
	require_once 'EmailFoundException.php';
	require_once 'Login.php';

	class UserDaoImpl implements UserDao
	{
		public function validate($user)
		{
			$uname = $user->getUsername();
			$pwd = $user->getPassword();


           	$connection = DatabaseUtilities::getConnection("movies");

      	   	$sql = "select * from users where username = ? and password = ?";
           	$statement = $connection->prepare($sql);
           
           	$statement->bind_param("ss",$uname, $pwd);

          	if ( $statement->execute() )
          	{
              		$statement->bind_result($username,$password);
              		if ( !$statement->fetch())
                    		throw new UserNotFoundException(); 
          	} 
		}
		public function insert($user)
		{
			$uname = $user->getUsername();
			$pwd = $user->getPassword();
			$eml = $user->getEmail();

			$connection = DatabaseUtilities::getConnection("movies");
			$sql = "select * from users where email = ?";
			$statement = $connection->prepare($sql);
			$statement->bind_param("s",$eml);
			if ( $statement->execute() )
			{
				$statement->bind_result($email);
				if($statement->fetch())
				{
					throw  new EmailFoundException();
				}
			}
			$sql = "INSERT INTO users VALUES ('$uname', '$pwd', '$eml')";
		

			if(mysqli_query($connection,$sql))
			{

			}
			else
			{
				throw  new UserNotFoundException();
			}

		}

	}
?>




