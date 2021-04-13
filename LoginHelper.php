<?php 
  class LoginHelper 
  { 
     private $username;
     private $password;

     public function __construct() 
     { 
         if ( isset($_REQUEST['username'])) 
               $this->username = $_REQUEST['username'];

        if (isset($_REQUEST['password'])) 
                $this->password = $_REQUEST['password'];
     }

     public function getUsername() 
     { 
         if ( !$this->username ) 
             return ''; 
         else 
             return $this->username; 
     } 

     public function getPassword()
     {
         if ( !$this->password )
            return '';
         else
            return $this->password; 
     }

  } 
?>



