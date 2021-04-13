<?php

ini_set("session.cache_limiter","public");
session_cache_limiter(false);
session_start();
if($_SESSION['status']!='Active')
{
	header("Location:Login.php");
}
require_once 'Search.php'; 
require_once 'MovieNotFoundException.php';
require_once 'Movie.php';
require_once 'MovieDao.php';
require_once 'MovieDaoImpl.php';


if(isset($_REQUEST['option']))
{
$option = $_REQUEST['option'];

try{
$movieDao = new MovieDaoImpl();
$movies=$movieDao->getMovieInfo($option);

include("InformationPage.php");
}
catch(MovieNotFoundException $unfe)
    {
       
        echo "err";
      
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	$searchTerm = $_POST['searchTerm'];
	$genre = $_POST['genre'];
	$language = $_POST['language'];
	$release = $_POST['release'];
	$rating = $_POST['rating'];

	$search=new Search($searchTerm,$genre,$language,$release,$rating);
	$movieDao=new MovieDaoImpl();
	try{
		
		$movies=$movieDao->searchMovies($search);
		include("SearchResults.php");
		
	}
	catch(MovieNotFoundException $unfe)
    {
       
        include("SearchResults.php");
      
    }
				
}
?>