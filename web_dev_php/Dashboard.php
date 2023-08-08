<?php
include('./Common/conn.php');
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
}

$username=$_SESSION['userID'];
$query="SELECT * from user_details WHERE user_id = '$username' ";
 
$result = $conn1->query($query);
if ($result->num_rows > 0){
$user_detail_data = mysqli_fetch_row($result);

}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/dashboard.css">
    <link rel="stylesheet" href="./Style/profile_picture.css" type="text/css">

</head>

<body>
    <div class="sidebar">
        <div class="prof">
            <div class="profile-pic-wrapper">
                <div class="pic-holder">
                    <img id="profilePic" class="pic" src="./images/profile.png">

                    <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto"
                        accept="image/*" style="opacity: 0;" />
                    <label for="newProfilePhoto" class="upload-file-block">
                        <div class="text-center">
                            <div class="mb-2">
                                <i class="fa fa-camera fa-2x"></i>
                            </div>
                            <div class="text-uppercase">
                                Update <br /> Profile Photo
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            <div class="details">
                <h1>
                    <?php echo $_SESSION['username']; ?>
                </h1>
                <button class="drpdwn_btn" aria-controls="lists" aria-expanded="false">
                    <i class="bi bi-chevron-down"></i>
                    <i class="bi bi-chevron-up"></i>
                </button>
                <section class="lists" id="lists" data-visible="false">
                    <ul>
                        <li><a href="index.php">
                                Home Page
                            </a></li>
                        <li><a href="#">
                                Saved Template
                            </a></li>
                        <li><a href="#">
                                Settings
                            </a></li>
                    </ul>
                    <input type="button" id="logout" name="logout" value="Logout" class="logout2">
                    <!-- <i class="bi bi-box-arrow-right"></i> -->

                </section>
            </div>
            <input type="button" onclick="window.location='./Php/logout.php'" id="logout" name="logout" value="Logout"
                class="logout1">
            <!-- <i class="bi bi-box-arrow-right"></i>-->

        </div>
    </div>

    <div class="hero">
        <h1>Your Details</h1>
        <p> *Fill it Carefully</p><br>
        <form id="user_details" name="user_details">

            <div class="work mb-3">
                <div class="mb-3">
                    <h5>General Details</h5>
                    <label for="exampleFormControlInput1" class="form-label">Email Id </label>
                    <input type="email" class="form-control" id="email_id" name="email_id" value="<?php if ($result->num_rows > 0){echo $user_detail_data[1];} else{echo " ";}?>" placeholder="">
                </div>
               

            </div>
            <div class="work mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Working Domain </label>
                    <input type="text" class="form-control" id="working_domain" name="working_domain" value="<?php if ($result->num_rows > 0){echo $user_detail_data[2];} else{echo " ";}?>" placeholder="">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Projects Details</label>
                    <textarea class="form-control" id="project_details" name="project_details" rows="3"><?php if ($result->num_rows > 0){echo $user_detail_data[3];} else{echo " ";}?></textarea>
                </div>
                
            </div>
            <br>
            <div class="education mb-3">
                <div class="mb-3">
                    <h5>Education</h5>
                    <label for="exampleFormControlInput1" class="form-label">College/University Details</label>
                    <textarea type="text" class="form-control" rows="3" name="college_university_details"
                        id="college_university_details" ><?php if ($result->num_rows > 0){echo $user_detail_data[4];} else{echo " ";}?></textarea>
                </div>
               
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Schooling Details</label>
                    <textarea class="form-control" id="school_details" name="school_details" rows="3"><?php if ($result->num_rows > 0){echo $user_detail_data[5];} else{echo " ";}?></textarea>
                </div>
                
            </div>
            <br>
            <div class="skills mb-3">
                <div class="mb-3">
                    <h5>Skills</h5>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Enter your Skills</label>
                    <textarea class="form-control" id="skill" name="skill" rows="3"><?php if ($result->num_rows > 0){echo $user_detail_data[6];} else{echo " ";}?></textarea>
                </div>
            <br>
            </div>
            <div class="skills mb-3">
                <div class="mb-3">
                    <h5>Experience Details</h5>
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Enter your Experiences</label>
                    <textarea class="form-control" id="experience_details"  name="experience_details"
                        rows="3"><?php if ($result->num_rows > 0){echo $user_detail_data[7];} else{echo " ";}?></textarea>
                </div>
                
            </div>
            <br>
            <div class="link mb-3">
            <div class="mb-3">
                    <h5>Links</h5>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">LinkedIn Profile Link </label>
                    <input type="text" class="form-control" id="linkdin_link" name="linkdin_link" value="<?php if ($result->num_rows > 0){echo $user_detail_data[8];} else{echo " ";}?>" placeholder="">
                </div>
               
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Github Profile Link </label>
                    <input type="text" class="form-control" id="github_link" name="github_link" value="<?php if ($result->num_rows > 0){echo $user_detail_data[9];} else{echo " ";}?>" placeholder="" >
                </div>
                

            </div>

            <div>
                <button class="btn btn-primary" name="user_detaiL_submit" id="user_detaiL_submit">Submit/Update</button>
            </div>
        </form>

    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="./Scripts/logout.js"></script>
    <script src="./Scripts/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>