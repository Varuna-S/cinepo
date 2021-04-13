<?php
header("Cache-Control:must-revalidate");
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
	.section
	{
		margin-left:33%;
		width:1000px;
	}
	.row{
		width: 1000px;
	}
	.thumbnail
	{
		width: 170px;
		height: 255px;
		border: solid 3px;
		border-radius: 3px;
		border-color: white;
	}
	.thumbnail:hover
	{
		border-color:#418EF2;
	}
	.rowElement{
		width: 170px;
	}
	a{
		text-decoration: none;
		color: white;
	}
	p.captionYear
	{
		color: #D6D0D0;
		font-size: 18px;
		margin: 0;
		display: inline-block;
		float: right;
		padding-right:5px; 
	}
	.elementCaption{
		width: 175px;
		margin-top: 2px;
	}
	.captionLink
	{
		display: inline-block;
		font-size: 17px;
		padding-left: 5px;
	}
	.row{
		display: flex;

	}
	.rowElement{

		margin:40px; 
	}
	figure
	{
		margin: 0;
	}
</style>
</head>
<body>
	<div class="topBar">
 	<div class="logo"></div>
  	<div class="logoutDiv"><a class="logout" href="LogoutController.php">Logout</a></div>
</div>
<div class="mainContainer">
	<?php if (isset($movies)) { ?>
	<div class="section">
		<?php foreach ( $movies as $movie ) { ?>
		<div class="row">
				<span class="rowElement"> 
			
						<a class="movieLink" href="MainMenuController.php?option=<?php echo $movie->getTitle();?>">
							<figure>
								<img class="thumbnail" src="<?php echo $movie->getImagePath();?>">
							</figure>
						</a>		
						<div class="elementCaption">
							<a class="captionLink" href="MainMenuController.php?option=<?php echo $movie->getTitle();?>">
								<?php echo $movie->getTitle();?>
							</a>
							<p class="captionYear"><?php echo $movie->getReleaseYear();?></p>
						</div>

		</div>
		<?php  
		 }?>
		</div>
		<?php  
	 } 
	 else {?> <div><center><h2 style="color:white;"> No Results Found </h2></center></div>
	 <?php } ?>


</body>
</html>