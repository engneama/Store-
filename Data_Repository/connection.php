<?php
// header('Content-Type: text/html; charset=utf-8'); //  السطر دا لازم يتكب فى صفحه ال PHP 
 /*
  class DbConfig 
  {    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'test';
    public $connection;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->connection;
    }
 }
  $database = new DbConfig();*/
 
//#########################################33
 
?>
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  mysqli_query($conn,"SET NAMES 'UTF8'");
  mysqli_query($conn,'SET CHARACTER SET UTF8');
?>

 
 

 