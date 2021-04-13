<?php
header("Cache-Control:no-cache,no-store,must-revalidate");
if($_SESSION['status']!='Active')
{
	header("Location:Login.php");
}
?>

<html>
<html>
<head>
	<style type="text/css">
	@font-face{
		font-family: Odin;
		src:url('fonts/Odin Rounded - Regular.otf')
		format('truetype');
	}
	body{
		font-family: Odin;
		background-color: #191d27;
		margin: 0;
		color:#fff;
	}
	.mainContainer{
		width:1000px;
		margin:auto;
		/*background-color: white;*/
		padding-top: 35px;

	}
	.topBar{
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #171717;

		top: 0;
		width: 100%;
		position:relative;
		height: 70px;
	}
	.logo{
		display: inline-block;
		width: 100px;
		height: 100px;
		background: url("images/cinemaTicket.png") no-repeat;
		background-size: 140px 140px;
		background-position: center center;
		margin-left: 20px;
		margin-top: -25px; 
	}
	.logoutDiv{
	width:80px;
	height: 60px;
	background: url("images/logout.png") no-repeat;
	background-size: 30px 30px;
	background-position: center center;
	float: right;
	display: flex;
    align-items: center;
    justify-content: center;
    padding-left: 90px;
}

a.logout:hover{
	cursor: pointer;
	color:orange;
}
</style>
 </head>
 <body>
 	<div class="topBar">
 	<div class="logo"></div>
  	<div class="logoutDiv"><a class="logout" href="LogoutController.php">Logout</a></div>
</div>
 	<div class="mainContainer">
 		
 		<img class="thumbnail" src="<?php echo $movies->getImagePath();?>"><br><br>
 		Movie name :&nbsp <?php echo $movies->getTitle();?><br><br>
 		Duration :&nbsp<?php echo $movies->getDuration();?><br><br>
 		Rating :&nbsp<?php echo $movies->getRating();?><br><br>
 		Description :&nbsp<?php echo $movies->getDescription();?><br><br>
 		Release Date :&nbsp<?php echo $movies->getReleaseDate();?><br><br>
 		Language :&nbsp<?php echo $movies->getlanguage();?><br><br>
 		Genre :&nbsp<?php echo $movies->getGenre();?><br><br>
 		Category :&nbsp<?php echo $movies->getCategory();?><br><br>
 		Director :&nbsp<?php echo $movies->getDirector();?><br><br>
 		Cast :&nbsp<?php echo $movies->getCast();?><br><br>
 	</div>
 </body>
 </html>