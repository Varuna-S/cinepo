<?php
	class Search
	{
		private $searchTerm;
		private	$genre;
		private $language;
		private	$release;
		private	$rating;

		public function __construct($searchTerm,$genre,$language,$release,$rating)
   		{
       			$this->searchTerm = $searchTerm;
       			$this->genre = $genre;
       			$this->language = $language;
       			$this->release = $release;
       			$this->rating = $rating;
   		}

   		public function getSearchTerm()
   		{
   			return $this->searchTerm;
   		}
   		public function setSearchTerm($searchTerm)
   		{
   			$this->searchTerm = $searchTerm;
   		}
   		public function getGenre()
   		{
   			return $this->genre;
   		}
   		public function setGenre($genre)
   		{
   			$this->genre = $genre;
   		}
   		public function getLanguage()
   		{
   			return $this->language;
   		}
   		public function setLanguage($language)
   		{
   			$this->language = $language;
   		}
   		public function getRelease()
   		{
   			return $this->release;
   		}
   		public function setRelease($release)
   		{
   			$this->release = $release;
   		}
   		public function getRating()
   		{
   			return $this->rating;
   		}
   		public function setRating($rating)
   		{
   			$this->rating = $rating;
   		}
   	}
?>