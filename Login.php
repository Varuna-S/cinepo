

<!doctype html>
<?php
header("Cache-Control:no-cache,no-store,must-revalidate");
ini_set("session.cache_limiter","public");
session_cache_limiter(false);
$message = false;
if ( isset($_REQUEST['message']))
	$message = $_REQUEST['message'];

require_once 'LoginHelper.php';
$loginHelper = new LoginHelper();  
?>

<html>
<head>
	<script>
		window.history.forward();
	</script>
	<style>
	@font-face{
		font-family: Raleway;
		src:url('fonts/Raleway-Regular.ttf')
		format('truetype');
	}
	body {

		font-family: 'Raleway',sans;
		color:#000000;


	}

	form{

		border: 1px solid;
		border-color: #ffffff;
		box-shadow: 1px 1px 2px 2px #d0d3d4 ;
		padding:35px;
		width:300px;
		min-height:250px;
		border-radius: 6px;	
		margin:0 auto;
		position: absolute;               
		top: 50%;
		left:50%;                         
		transform: translate(-50%, -50%);

	}
	input[type='text'],input[type='password'] {
		width:298px;
		padding: 6px 20px;
		margin: 5px 0;
		display: inline-block;
		border: 2px solid #ccc;
		box-sizing: border-box;
		border-radius: 6px;
	} 
	input[type='submit'] {
		width:100px;
		height: 35px;
		padding: 5px 20px;
		margin: 20px 0;
		display: inline-block;
		border: 2px solid #ccc;
		box-sizing: border-box;
		border-radius: 6px;
		font-family: Raleway;
		font-size: 15px;
		background-color:  #2e4053 ;
		color:#ffffff;
		opacity: 0.9;
	}
	input[type='submit']:hover{
		opacity: 1;
	}
	input [type="checkbox"]
	{
		margin:20px;
	}
	p {

		display:block;
		margin-bottom: .5rem;
	} 
	a{
		text-decoration: none;
		font-size: 15px;
		color: #2e4053
	}
	a:hover{
		text-decoration:underline;
	}
	div[class='title']
	{
		padding: 3px;
	}     

}

</style>
</head>

<body>
	<form name="loginName" method="post" action="LoginController.php" >
		<div class='title'>
			<center><h3> Login to Your Account</h3></center>
		</div>
		<div id="login" >
			<div id='username'>
				<p>Username</p>
				<input type="text" name="username"  required="required" value="<?php echo $loginHelper->getUsername(); ?>"/>
			</div>
			<div id='password'>
				<p>Password</p>
				<input type="password" name="password"  required="required" value="<?php echo $loginHelper->getPassword(); ?>" />
				<?php
				if ( $message )
					echo '<font color="red" size=2px>'.$message.'</font>';     ?>
			</div>
			
			<div id='submit'>
				<center>
					<input type="submit" value="Login" />
					<br>
					<a href='SignupController.php'>Sign up</a>

				</center>
			</div>
		</div>
	</form>
</body>
</html>

