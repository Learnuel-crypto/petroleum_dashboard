<?php

class Database{
    //DB Params
    private $host='localhost';
    private $db_name='marketwatch_db';
    private $username='root';
    private $password='';
    public $conn='';

    public function __construct()
    {
        $this->conn=null;
        try{ 
        $this->conn= new mysqli($this->host,$this->username,$this->password,$this->db_name);
    }catch(Exception $e){
        echo'Connection Error: '.$e->getMessage();
        die("Connection failed: " . mysqli_connect_error());
    }
    } 
 public function connect_mysql(){ 

         return $this->conn; 
     } 
 }
?>