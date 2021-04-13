<?php
require_once 'DatabaseUtilities.php';
require_once 'MovieNotFoundException.php';
require_once 'Movie.php';

class MovieDaoImpl implements MovieDao
{
	public function getMovieInfo($movieId)
	{
		$connection = DatabaseUtilities::getConnection("movies");
		$sql = "SELECT m.title,m.duration,m.rating,m.release_date,m.release_year,m.image_path,m.description,m.cast,d.director_name,c.category_name,l.language_name,g.genre_name FROM movies as m,languages as l,genres as g,directors as d,categories as c where m.language_id=l.language_id and m.genre_id=g.genre_id and m.director_id=d.director_id and m.category_id=c.category_id and title = ?";
		    $statement = $connection->prepare($sql);
        $statement->bind_param("s",$movieId);
        $statement->execute();
		    $statement->bind_result($title,$duration,$rating,$release_date,$release_year,$image_path,$description,$cast,$director_name,$category_name,$language_name,$genre_name);
			   if($statement->fetch())
          $movie=new Movie($title,$duration,$rating,$release_date,$release_year,$image_path,$description,$cast,$director_name,$category_name,$language_name,$genre_name);
        else
          throw new MovieNotFoundException();

        
        
		
        return $movie;
	
}
public function searchMovies($search)
  {
    $searchTerm =$search->getSearchTerm();
    $genre =$search->getGenre();
    $language= $search->getLanguage();
    $release =$search->getRelease();
    $rating =$search->getRating();
    $connection = DatabaseUtilities::getConnection("movies");
    $sql = "SELECT m.title,m.duration,m.rating,m.release_date,m.release_year,m.image_path,m.description,m.cast,d.director_name,c.category_name,l.language_name,g.genre_name FROM movies as m,languages as l,genres as g,directors as d,categories as c where m.language_id=l.language_id and m.genre_id=g.genre_id and m.director_id=d.director_id and m.category_id=c.category_id ";
    if(!empty($searchTerm))
    {
      $sql = $sql."and title LIKE '%".$searchTerm."%' ";
    }
    if ($language!='all') {
      $sql = $sql."and l.language_name='".$language."' ";
    }
    if ($release!='all') {
      if($release == '2016')
      $sql = $sql."and m.release_year  <= '".$release."' ";
      else
      $sql = $sql."and m.release_year = '".$release."' ";
    }

    if ($rating!='all') {
      
      $sql = $sql."and m.rating > '".$rating."' ";
    }
    if ($genre!='all') {
      
      $sql = $sql."and g.genre_name = '".$genre."' ";
    }

        $statement = mysqli_query($connection,$sql);
        if (mysqli_num_rows($statement) == 0)
        {
      throw new MovieNotFoundException();
      
      }
    else{
      
    $post = array();
        while($row = mysqli_fetch_assoc($statement))
        {
              $post[] = $row;
         }

        $movies=array();
        foreach ($post as $row) 
        { 
        
           $movie=new Movie($row['title'],$row['duration'],$row['rating'],$row['release_date'],$row['release_year'],$row['image_path'],$row['description'],$row['cast'],$row['director_name'],$row['category_name'],$row['language_name'],$row['genre_name']);
           
           $movies[]=$movie;
           
        }
      
    
    }
            
       
         $statement->close();
         $connection->close(); 
        
        return $movies;   
  }
}
?>