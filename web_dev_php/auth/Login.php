<?php
session_start();

include('../Common/conn.php');


$username = $_POST['username'];
$password = $_POST['password'];

//login configuration fetching
$stmt = $conn1->prepare("select * from login_register where user_id = ?");
$stmt->bind_param('s', $username);

$stmt->execute();

$stmt_result = $stmt->get_result();

//user detail in dashboard fetching

$user_detail = $conn1->prepare("select * from user_details where user_id = ?");
$user_detail->bind_param('s', $username);

$user_detail->execute();

$user_detail_result = $user_detail->get_result();

$user_detail_data = $user_detail_result->fetch_assoc();


//loging checking
if ($stmt_result->num_rows > 0) {

  $data = $stmt_result->fetch_assoc();

  if ($data['pass'] === $password) {
    //login checking if user detail exist in dashboard details
    echo "Login Success";
   /* if ($user_detail_data['user_id'] == NULL) {
      //checking if the user details exist in dashboard or not
      echo "Login Success..... Ridirecting to dashboard";

    } else {
      
    }*/

  } else if ($data['pass'] != $password) {

    echo "Invalid Password";
    // header("refresh:0; url = http://localhost/web_dev_php/auth/Login_Form.php");
  }

} else {
  echo "Invalid Userid & Password";
  //header("refresh:0; url = http://localhost/web_dev_php/auth/Login_Form.php");
}
$user = $data['First_name'] . " " . $data['Last_name'];
$_SESSION['username'] = $user;
$_SESSION['userID']=$data['user_id'];



//$conn1->close();
?>