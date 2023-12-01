<?php
 class Database
 {
     private $username = "root";
     private $password = "";
     private $Dns="mysql:host=localhost;dbname=student portal";

     public $con = null;

     public function __construct()
     {
         $this->con = new PDO($this->Dns, $this->username, $this->password);
         if(!$this->con)
         {
           echo "Error: in connection";
         }
     }

 }