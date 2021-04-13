<?php
    require_once 'User.php';
    require_once 'UserDao.php';
    require_once 'UserDaoImpl.php';
    require_once 'UserNotFoundException.php';
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $user = new User($username,$password,null);
    $userDao = new UserDaoImpl();
    $message = false;

//  ob_end_clean();
    try{
        $userDao->validate($user);
        ini_set("session.cache_limiter","must-revalidate");
        header("Cache-Control:no-cache,no-store,must-revalidate");
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['status']='Active';
        header("Location: MainMenu.php");
    }
    catch(UserNotFoundException $unfe)
    {
        $_POST['message'] = "Username and password does not exist";
        header("Location:Login.php?message=Username or password incorrect&username=".$username);
    }
?>


