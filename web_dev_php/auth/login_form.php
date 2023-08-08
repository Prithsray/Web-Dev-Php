<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Style/style_auth.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="ma">
        <div class="cd shadow p-4" style="width: 25rem;">
            <div class="heading">
                <span>Login</span>
            </div>
            <form  name="loginform" id="loginform" class="login_form">
                <div class="mb-3 row">
                    <label for="validationServerUsername" class="col-form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-form-label">Password</label>
                    <div class="col-sm-12">
                    <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <input type="submit" class="btn btn-primary s1" id="login_submit" name="login_submit" value ="Login" >
                    <a class="float-end" href="#">Forgot Password</a>
                </div>
                <hr class="hr" />
                <div class="logo-icons">
                    <span>Or Login with</span>
                    <i class="bi bi-google"></i>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-github"></i>
                </div>
                <hr class="hr" />
                <div class="col-12 mb-2 cen">
                    <a href="http://localhost/web_dev_php/auth/Register_form.php">Create Account </a>
                </div>
                
                
            </form>
        </div>   
    </div>    


    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../Scripts/script_login.js"></script>
</body>
</html>