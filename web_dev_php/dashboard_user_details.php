<?php
include('./Common/conn.php');

session_start();

$username = $_SESSION['userID'];
$email_id=$_POST['email_id'];
$working_domain=$_POST['working_domain'];
$project_details=$_POST['project_details'];
$college_university_details=$_POST['college_university_details'];
$school_details=$_POST['school_details'];
$skill=$_POST['skill'];
$experience_details=$_POST['experience_details'];
$linkdin_link=$_POST['linkdin_link'];
$github_link=$_POST['github_link'];



$user_detail = $conn1->prepare("select * from user_details where user_id = ?");
$user_detail->bind_param('s', $username);

$user_detail->execute();

$user_detail_result = $user_detail->get_result();

$user_detail_data = $user_detail_result->fetch_assoc();

if($user_detail_data['user_id']==$username){

    $strSql = "UPDATE user_details SET email_id ='$email_id',working_domain='$working_domain',project_details='$project_details',college_university_details='$college_university_details',school_details='$school_details',skill='$skill',experience_details='$experience_details',linkdin_link='$linkdin_link',github_link ='$github_link' WHERE user_id = '$username'";

    $query=$conn1->query($strSql);
    echo "Information Updated Sucessfully";

}



else{
$strSql = "INSERT INTO user_details(user_id,email_id,working_domain,project_details,college_university_details,school_details,skill,experience_details,linkdin_link,github_link) VALUES(";
        $strSql = $strSql . "'$username',"; 
        $strSql = $strSql . "'$email_id',"; 
        $strSql = $strSql . "'$working_domain',"; 
		$strSql = $strSql . "'$project_details',";
		$strSql = $strSql . "'$college_university_details',";
		$strSql = $strSql . "'$school_details',";
		$strSql = $strSql . "'$skill',";
		$strSql = $strSql . "'$experience_details',";
        $strSql = $strSql . "'$linkdin_link',";
        $strSql = $strSql . "'$github_link')";


        $query=$conn1->query($strSql);
        echo "Information Submitted Sucessfully";


}


$conn1->close();
?>