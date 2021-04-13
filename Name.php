<!DOCTYPE HTML>

<?php 
   require_once 'Header.php';
   require 'NameHelper.php'; 
   $nameHelper = new NameHelper();    

   $result = false;
   if ( isset($_POST['name']))
       $result = $_POST['name'];

?>


<html>
  <head>
     <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body >
    <br>
    <br>
    <form name="nameForm" method="post" action="GeneralController.php?option=name" >
      <br>
      <br>
      Name : 
      <input type="text" name="name" size="30" required value="<?php echo $nameHelper->getName(); ?>" />
      <br>
      <br>
      <input type="submit" value="Submit" />
      <br>
      <br>
      <?php
          if ( $result )
              echo 'Welcome to '.$result;
      ?>  
    </form>
  </body>


</html>