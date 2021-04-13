<?php
class Movie
{

	private   $title;
	private   $duration;
	private   $rating;
	private   $releaseDate;
	private   $releaseYear;
	private   $imagePath;
	private   $description;
	private   $cast;
	private   $language;
	private   $director;
	private   $category;
	private   $genre;

	public function __construct($title, $duration, $rating, $releaseDate, $releaseYear, $imagePath,$description, $cast,$director,$category,$language,$genre)
	{

		$this->title = $title;
		$this->duration =$duration;
		$this->rating = $rating;
		$this->releaseDate = $releaseDate;
		$this->releaseYear = $releaseYear;
		$this->imagePath = $imagePath; 
		$this->description = $description;
		$this->cast = $cast;
		$this->language =$language; 
		$this->director =$director;
		$this->category =$category;
		$this->genre =$genre;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}
	public function getDuration()
	{
		return $this->duration;
	}

	public function setDuration($duration)
	{
		$this->duration =$duration;
	}

	public function setRating($rating)
	{ 
		$this->rating = $rating; 
	}
	public function getRating() 
	{ 
		return $this->rating;
	}
	public function setReleaseDate($releaseDate)
	{
		$this->releaseDate = $releaseDate;
	}
	public function getReleaseDate()
	{ 
		return $this->releaseDate; 
	}
	public function setReleaseYear($releaseYear)
	{ 
		$this->releaseYear = $releaseYear; 
	}
	public function getReleaseYear()
	{ 
		return $this->releaseYear; 
	}
	public function setImagePath($imagePath)
	{ 
		$this->imagePath = $imagePath;
	}
	public function getImagePath()
	{ 
		return $this->imagePath; 
	}
	public function setDescription($description)
	{ 
		$this->description = $description;
	}
	public function getDescription()
	{ 
		return $this->description;
	}
	public function setCast($cast) 
	{ 
		$this->cast = $cast; 
	}
	public function getCast()
	{ 
		return $this->cast;
	}
	public function setLanguage($language)
	{ 
		$this->language = $language;
	}
	public function getLanguage()
	{ 
		return $this->language; 
	}
	public function setDirector($director)
	{ 
		$this->director = $director; 
	}
	public function getDirector()
	{ 
		return $this->director;
	}
	public function setCategory($category)
	{
		$this->category = $category;
	}
	public function getCategory() 
	{ 
		return $this->category;
	}
	public function setGenre($genre)
	{ 
		$this->genre = $genre;
	}
	public function getGenre()
	{
		return $this->genre;
	}

}
?>