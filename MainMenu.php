<?php
header("Cache-Control:no-cache,no-store,must-revalidate");
ini_set("session.cache_limiter","public");
session_cache_limiter(false);
session_start();
if($_SESSION['status']!='Active')
{
	header("Location:Login.php");
}
?>

<html>
<head>
<script type="text/javascript" > 
	var slide_index=1;
	displaySlides(slide_index);  
	function nextSlide(n) {  
		displaySlides(slide_index += n);  
	}  
	function prevSlide(n) {  
		displaySlides(slide_index -= n);  
	}  
	function displaySlides(n) {   
		var slide = document.getElementsByClassName("slides");
            //console.log(n);
            if (n > slide.length ) { slide_index = 1 };
            if (n <= 0 ) { console.log("im in"); slide_index = slide.length };
            console.log(slide_index); 
            if (n <= slide.length && n > 0) { slide_index = n };  
            for (var i = 0; i < slide.length; i++) {  
            	slide[i].style.display = "none";

            };  
            slide[slide_index-1].style.display = "block";
            highlightDots(slide_index);

        }
        function currentSlide(n)
        {
        	highlightDots(n)

        	displaySlides(n);

        } 
        function highlightDots(n)
        {
        	var dots = document.getElementsByClassName("dots");
        	console.log(dots);
        	for (var i = 0; i < dots.length; i++) {  
        		dots[i].style.width = "10px";
        		dots[i].style.height = "10px";
        		dots[i].style.borderWidth="0px";
        		dots[i].style.background ="#E9E9E9"; 
        	}; 
        	dots[n-1].style.width= "14px";
        	dots[n-1].style.height="14px";
        	dots[n-1].style.borderStyle = "solid"; 
        	dots[n-1].style.borderWidth="2px";
        	dots[n-1].style.borderColor="white";
        	dots[n-1].style.background ="rgba(255, 255, 255, 0)";
        }
    </script>   
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
    .sliderContainer{
    	width: 950px;
    	position: relative;
    	margin:auto;


    }
    .slides{
    	display:none;
    	animation-name: fade;
    	animation-duration: 1.0s;

    }
    @keyframes fade{	
    	from {opacity: 0.4}
    	to{opacity: 1}
    }

    .left,.right{
    	cursor: pointer;
    	position: absolute;
    	top:50%;
    	border-radius: 5px;
    	width: 32px; height: 32px; 
    	background-size: 16px 16px; 
    	top: 50%; 
    	margin-top: -16px;
    	color: #fff; background-color: rgba(0, 0, 0, 0.3);
    }
    .left{
    	background-image: url("images/left.png");
    	background-position: center center;
    	background-repeat: no-repeat;	
    	left: 10px;

    }
    .right{
    	background-image: url("images/right.png");
    	background-position: center center;
    	background-repeat: no-repeat;
    	right: 10px;
    }
    .left:hover
    {
    	visibility: visible;
    	background-color: rgba(0, 0, 0, 0.6);
    }
    .right:hover
    {
    	visibility: visible;
    	background-color: rgba(0, 0, 0, 0.6);
    }
    .slideImages{
    	height: 480px;
    	width: 950px;
    	border-radius: 5px;

    }
    .dots{
    	display: inline-block;
    	width: 10px; 
    	height:10px;
    	margin:5px;
    	background: #E9E9E9;
    	border-radius:2px;
    }

    .active,.dots:hover{
    	cursor: pointer;
    	background: rgba(0,0,0,0.5);
    }
    .block{
    	display: block;

    }
    .dotsDiv{
    	margin-top: -35px;
    	display: flex;
    	flex-direction: row;
    	flex-wrap: wrap;
    	justify-content: center;
    	align-items: center;
    }
    .dotsInitial{
    	width:14px;
    	height:14px;
    	border-style:solid; 
    	border-width:2px;
    	border-color:white;
    	background:rgba(255, 255, 255, 0);
    }
    .searchContainer
    {
    	background-color: #171717;
    	width: 100%;
    	height: 190px;
    	margin-top:30px;
    	border-radius: 5px;
    	padding-top:25px;
    	padding-bottom:25px;

    }
    .searchDiv{
    	padding-left: 50px;
    	padding-right: 50px;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    }
    .searchForm
    {
     	
    }
    .selectContainer{
    	display: inline-block;
    	margin-right:20px;

    }
    input.searchTerm{
    	background:#454545 url("images/iconfinder.svg") no-repeat ;
    	height: 35px;
    	border: none;
    	border-radius: 4px;
    	width: 613px;
    	padding-left:35px;
    	background-size: 27px 27px;
    	background-position: left center;
    	color: #D6D0D0;
    	display: block;
    }
    input.searchButton{
    	height: 35px;
    	border: none;
    	border-radius: 3px;
    	width: 295px;
    	font-family: Odin;
    	font-size: 20px;
    	color: #fff;
    	background: #418EF2;
    	opacity: 0.95;
    	margin-top: 10px;
    }
    .searchButton:hover
    {
    	cursor:pointer;
    	opacity: 1;
    }
    
    .searchButtonDiv
    {
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	transform: translate(-10px, 0);
    }
    select{
    	color: #fff;
    	background: #454545 url("images/dropdown.png")  no-repeat ;
    	background-size: 25px 25px;
    	border: none;
    	border-radius: 3px;
    	height: 35px;
    	width: 135px;
    	padding-left: 10px;
    	padding-right: 10px;
    	padding-top: 1px;
    	-webkit-appearance: none;
    	-moz-appearance: none;
    	background-position: right center;
    	background-origin: content-box;
    }
    option{
    	-webkit-appearance: none;
    	-moz-appearance: none;
    	border:none;
    }
    p{
    	color: #D6D0D0;
    	font-size: 18px;
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
	<div class="sliderContainer"> 
		<div  class="slides block">  
			<a href="MainMenuController.php?option=Logan"><img class="slideImages"  src="images/logan2.jpg" >  </a>       
		</div>   
		<div  class="slides">  
			<a href="MainMenuController.php?option=Harry Potter and the Deathly Hallows  Part 1"><img class="slideImages  " src="images/harryPotter.png">    </a>        
		</div>


		<div  class="slides">  
			<a href="MainMenuController.php?option=K.G.F"><img class="slideImages " src="images/kgf.jpg"></a> 

		</div>
		<div  class="slides">  
			<a href="MainMenuController.php?option=The Transporter"><img class="slideImages " src="images/transporter.jpg"> </a> 

		</div>

		<div class="left" onclick="prevSlide(1)"></div> 
		<div class="right" onclick="nextSlide(1)"></div>
		<div class='dotsDiv'> 
			<div class="dots dotsInitial" onclick="currentSlide(1)"></div>
			<div class="dots " onclick="currentSlide(2)"></div>
			<div class="dots " onclick="currentSlide(3)"></div>
			<div class="dots " onclick="currentSlide(4)"></div>
		</div>
	</div>
	<div class="searchContainer">
		<div class="searchDiv">
			<form method='post' class='searchForm' action="MainMenuController.php">
				<input autocomplete="off" type='search' class="searchTerm" name="searchTerm">
				<div class='selectContainer'>
					<p>Genre:<p>
						<select name="genre">
							<option value="all">All</option>
							<option value="Action">Action</option>
							<option value="Adventure">Adventure</option>
							<option value="Comedy">Comedy</option>
							<option value="Drama">Drama</option>
							<option value="Horror">Horror</option>
							<option value="Sci-Fi">Sci-Fi</option>
						</select>
					</div>
					<div class='selectContainer'>
						<p>Language:<p>
							<select name="language">
								<option value="all">All</option>
								<option value="English">English</option>
								<option value="Kannada">Kannada</option>
								<option value="Hindi">Hindi</option>
							</select>
						</div>

						<div class='selectContainer'>
						<p>Release:<p>
							<select name="release">
									<option value="all">All</option>
									<option value="2018">2018</option>
									<option value="2017">2017</option>
									<option value="2016">Older</option>
							</select>
						</div>
						<div class='selectContainer'>
							<p>Rating:<p>
							<select name="rating">
										<option value="all">All</option>
										<option value="9">Greater than 9</option>
										<option value="8">Greater than 8</option>
										<option value="7">Greater than 7</option>
										<option value="6">Greater than 6</option>
										<option value="5">Greater than 5</option>
										<option value="4">Greater than 4</option>
										<option value="3">Greater than 3</option>
										<option value="2">Greater than 2</option>
										<option value="1">Greater than 1</option>
							</select>
						</div>
						<div class="searchButtonDiv">
							<input type="submit" class="searchButton" value="Search">
						</div>
					</form>
				</div>
			</div>
			<div class="section">
				<div class="row">
					<span class="rowElement">
						<a class="movieLink" href="MainMenuController.php?option=Black Panther">
							<figure>
								<img class="thumbnail" src="/images/movies/blackpanther.jpg">
							</figure>
						</a>		
						<div class="elementCaption">
							<a class="captionLink" href="">
								Black Panther
							</a>
							<p class="captionYear">2018</p>
						</div>
						</span>
						<span class="rowElement">
						<a class="movieLink" href="MainMenuController.php?option=DeadPool 2">
							<figure>
								<img class="thumbnail" src="/images/movies/deadPool.jpg">
							</figure>
						</a>		
						<div class="elementCaption">
							<a class="captionLink" href="">
								Dead Pool 2
							</a>
							<p class="captionYear">2018</p>
						</div>
						</span>
						
						<span class="rowElement">
						<a class="movieLink" href="MainMenuController.php?option=Humble Politician Nograj">
							<figure>
								<img class="thumbnail" src="/images/movies/humblePolticianNograj.jpg">
							</figure>
						</a>		
						<div class="elementCaption">
							<a class="captionLink" href="">
								Humble Politician Nograj
							</a>
							<p class="captionYear">2018</p>
						</div>
						</span>
						<span class="rowElement">
						<a class="movieLink" href="MainMenuController.php?option=Deewaar">
							<figure>
								<img class="thumbnail" src="/images/movies/deewaar.jpg">
							</figure>
						</a>		
						<div class="elementCaption">
							<a class="captionLink" href="MainMenuController.php?option=Deewaar">
								Deewaar
							</a>
							<p class="captionYear">1975</p>
						</div>
						</span>
					</div>
			</div>	
	</div>
	</body>
</html>	