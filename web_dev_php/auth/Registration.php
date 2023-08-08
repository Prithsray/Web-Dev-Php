<?php
include('../Common/conn.php');

$Firstname = $_POST['firstname'];
$LastName= $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['conpassword'];




// Check connection

$stmt= $conn1->prepare("select * from login_register where user_id = ?" );
  $stmt->bind_param('s',$username);
  
  $stmt->execute();
  
  $stmt_result = $stmt->get_result(); 
  if($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc(); 
    if($data['user_id'] === $username){
    echo "You already have An Account";
    }
  }

  else{
  $stmt= $conn1->prepare("insert into login_register(user_id,pass,First_name,Last_name) values (?,?,?,?)" );
  $stmt->bind_param('ssss',$username,$password,$Firstname,$LastName);
  
  if(strlen($password)== strlen($confirm_password) && strlen($Firstname)<30 && strlen($LastName)<30){
 
  echo "Registered Successfully";
  $stmt->execute();
  
  }
else{

    echo "Register Again";

  } 
 
}

$conn1->close();
?>