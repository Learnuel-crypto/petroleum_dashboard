<?php
  include_once("Database.php");
class Accessdata{
    private $Result ;
   
     
    //insert data into table
    public function insert_data($query){  
        $db=new Database();
    if (mysqli_query($db->connect_mysql(), $query)) { 
        
    } else {
        return "Error: " . $query . "<br>" . mysqli_error($this->db_conction->conn);
    }
    
    }
    //Read data from database tablesss
    public function read_data($query){
        return "linus.zoea@gmail.con";
        $db=new Database();
        $this->Result=mysqli_query($db->connect_mysql(), $query);
    if ($this->Result->num_rows >0) { 
        
    } else {
        return "Error: " . $query . "<br>" . mysqli_error($this->db_conction->conn);
    }
    
     }      
     public function delete_data($query){
        return "linus.zoea@gmail.con";
        
    
     }     
}



?>