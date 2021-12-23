<?php
session_start();

include_once("../Config/Database.php");
include_once("../Config/Accessdata.php");
include_once("./Userlogin.php");
 
$db= new Database();
   
//Register user
 if(isset($_POST["user_register"])){  
    $email=$db->conn->real_escape_string($_POST["email"]);
    $password=$db->conn->real_escape_string($_POST["password"]);  
    
    $user = new Userlogin();
    if($user->user_exist($email,$db->conn)){
      exit('user already exist');
    }else{ 
      //send data to database
        $user->register_user($email,$password,$db->conn);
      if($user->Error_log==null){
         echo('success');
      }else{
            echo ($user->Error_log);
      }
    }
    
}
//register gas station
if (isset($_POST["register"])){
   $businessname=$db->conn->real_escape_string( $_POST["businessname"]);
   $cacnumber=$db->conn->real_escape_string( $_POST["cacnumber"]);
   $email=$db->conn->real_escape_string( $_POST["email"]);
   $state=$db->conn->real_escape_string( $_POST["state"]);
   $city=$db->conn->real_escape_string( $_POST["city"]);
   $businesscontact=$db->conn->real_escape_string( $_POST["businesscontact"]);
   $address=$db->conn->real_escape_string( $_POST["address"]); 
   $user = new Userlogin();
   if($user->business_exist($cacnumber,$db->conn)){
      exit("Business cac number already exist");
   }else if($user->email_exist($email,$db->conn)) {
      exit("Email already exist");
   }
   else{
      $user->register_business($businessname,$cacnumber,$email,$state,$city,$businesscontact,$address,$db->conn);
      if($user->Error_log==null){
         exit('success');
      }else{
            exit($user->Error_log);
      }
   }
    
}
//Login user
if(isset($_POST["login"])){
   $email = $db->conn->real_escape_string( $_POST["email"]);
   $password = $db->conn->real_escape_string( $_POST["password"]);
   $user = new Userlogin();
   $data=[];
   $data= $user->login($email,$password,$db->conn);
   if($data=="0"){
      echo('incorrect email or password');
   }else{ 
      
      if($data["Regid"]=="" || $data["Regid"]==null){
          $data["Regid"]="0";
       }
      // $_SESSION["Regid"]=$data["Regid"];
      // $_SESSION["Email"]=$data["Email"]; 
      exit($data['Regid']);
      
   }
}
//contact page handler
if(isset($_POST["submit_contact"])){
   $fullname=$db->conn->real_escape_string( $_POST["fullname"]);
   $email=$db->conn->real_escape_string( $_POST["email"]);
   $message=$db->conn->real_escape_string( $_POST["message"]);  
   $user = new Userlogin();
    $user->user_make_contact($fullname,$email,$message,$db->conn);
  if($user->Error_log==null){
     exit('success');
  }else{
     exit($user->Error_log);
  }
}
 
//find user details for password reset
if(isset($_POST["forget_password"])){
   $email=$db->conn->real_escape_string( $_POST["email"]);
   $user = new Userlogin();
   $data =$user->find_user($email,$db->conn);
   if($data=="0"){
      exit('Email was not found');
   }else{ 
      $_SESSION["UserId"]=$data["UserID"];
      $_SESSION["Email"]=$email;
      $_SESSION["Regid"]=$data["Regid"];
      $_SESSION["LoggedIn"]="1";
      exit('success');
   }

}

//reset normal user password
if(isset($_POST["reset_password"])){
   $email=$db->conn->real_escape_string( $_POST["email"]);
   $userid=$db->conn->real_escape_string( $_POST["userid"]);
   $password=$db->conn->real_escape_string( $_POST["password"]);
   $user = new Userlogin();
   $user->reset_password($userid,$email,$password,$db->conn);
   if($user->Error_log==null){
      exit('success');
   }else{
      exit($user->Error_log);
   }
}

?>
 