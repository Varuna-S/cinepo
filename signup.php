<!doctype html>

<?php
$message = false;
$username = false;
$email = false;
if ( isset($_REQUEST['message']))
  $message = $_REQUEST['message'];
if ( isset($_REQUEST['username']))
 $username = $_REQUEST['username'];
if ( isset($_REQUEST['email']))
 $email = $_REQUEST['email'];

?>

<html>
<head>

 <script>

 </script>
 <style>
 @font-face{
  font-family: Raleway;
  src:url('fonts/Raleway-Regular.ttf')
  format('truetype');
}
body {

  font-family: 'Raleway';
  color:#000000;


}

form{

  border: 1px solid;
  border-color: #ffffff;
  box-shadow: 1px 1px 2px 2px #d0d3d4 ;
  padding:35px;
  width:309px;
  min-height:250px;
  border-radius: 6px;	
  margin:0 auto;
  position: absolute;               
  top: 50%;
  left:50%;                         
  transform: translate(-50%, -50%);

}
input[type='text'],input[type='password'],input[type='email'] {
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
font.required{
  font-size:2em;
  color: red;
} 
div[class='title']
{
	padding: 3px;
}     

}

</style>
</head>

<body>
 <form name="signUp" method="post" action="SignupController.php" >
  <div class='title'>
   <center><h3> Create your Account</h3></center>
 </div>
 <div id="signup" >
  <div id='usernameDiv'>
   <p>Username</p>
   <input type="text" name="username" id="username" required="required" value="<?php if ( isset($_REQUEST['username'])) echo $_GET['username'];?>" /><font class='required'  >*</font>
   <div id="usrErrorText"></div>
 </div>
 <div id='emailDiv'>
  <p>Email</p>
  <input type="email" name="email" id="email" required="required" value="<?php if ( isset($_REQUEST['email'])) echo $_GET['email'];?>"/><font class='required' >*</font>
</div>
<div id='passwordDiv'>
  <p>Password</p>
  <input type="password" name="password" id="password" required="required " autocomplete="off"autocomplete="off"/><font class='required'>*</font>

  <p>Confirm Password</p>
  <input type="password" name="confirmPassword" id="confirmPassword" required="required" autocomplete="off" /><font class='required'>*</font>
  <div id="pwdErrorText"></div>
  <?php
  if ( $message )
    echo '<font color="red" size=2px>'.$message.'</font>';    
  ?>
</div>
<div id='submit'>
 <center>
   <input type="submit" value="Sign up" onclick="">    
 </center>
</div>
</div>
</form>
</body>
</html>