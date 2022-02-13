<?php
class Connection {
   private $servername ;
   private $username;
   private $password;
   private $dbname;
    protected function connect(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="school";
        $conn = new mysqli("localhost","root","","school"); 
        return $conn;
    }
   
}
