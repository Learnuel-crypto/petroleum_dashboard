<?php
 include_once("../Config/Accessdata.php");
class Userlogin{
        public $Error_log;
        public static $Regid;
        public static $Email;
   
    //check if user already exist
    public function user_exist($email,$conn){
        $result=$conn->query("SELECT Email FROM users WHERE Email='$email'");
        if($result->num_rows>0){
            return true;
        }else{
            return false;
        }
    }
    //Register user
    public function register_user($email,$password,$conn){ 
        //encrypt password later
        $query="INSERT INTO users(Email,Password) VALUES('$email','$password') ";
        if (mysqli_query($conn, $query)) { 
                    $this->Error_log=null;
        } else {
            $this->Error_log= "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
    //check if business already exist in database
    public function business_exist($cac_number,$conn){
        $result=$conn->query("SELECT CAC FROM business WHERE CAC='$cac_number'");
        if($result->num_rows>0){
            return true;
        }else{
            return false;
        }
    }
    public function email_exist($email,$conn){
        $result=$conn->query("SELECT Email FROM Business WHERE Email='$email'");
        if($result->num_rows>0){
            return true;
        }else{
            return false;
        }
    }
    public function register_business($buisness,$cac,$email,$state,$city,$contact,$address,$conn){
       $query="INSERT INTO business (BusinessName,CAC,Email,State,City,Contact,Address)
        VALUES('$buisness','$cac','$email','$state','$city', '$contact','$address') ";
        if (mysqli_query($conn, $query)) { 
                    $this->Error_log=null;
        } else {
            $this->Error_log= "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }


    public function login($email,$password,$conn){
        $result=$conn->query("SELECT Regid, Email FROM users WHERE Email='$email' AND Password='$password'");
        if($result->num_rows>0){
            return $row=$result->fetch_assoc();
        }else{
            return "0";
        }
    }

    public function user_make_contact($fullname,$email,$message,$conn){
        $query="INSERT INTO message(Fullname,Email,Text)
        VALUES('$fullname','$email','$message') ";
        if (mysqli_query($conn, $query)) { 
                    $this->Error_log=null;
        } else {
            $this->Error_log= "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

//Find user details for password reset
public function find_user($email,$conn){
    $result=$conn->query("SELECT UserID, Email FROM users WHERE Email='$email'");
        if($result->num_rows>0){
            return $row=$result->fetch_assoc();
        }else{
            return "0";
        }
}

//reset user password
public function reset_password($userid,$email,$password,$conn){
$query = "UPDATE users SET Password='$password' WHERE UserID='$userid'";
if (mysqli_query($conn, $query)) { 
    $this->Error_log=null;
} else {
    $this->Error_log= "Error: " . $query . "<br>" . mysqli_error($conn);
}
    }
}

?>