<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style_auth.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="main">
    <div class="cb shadow-lg p-4" style="width: 35rem;">
        <div class="heading">
            <span>User Registration</span>
        </div>
        <form  id="registerform" name="registerform">
            <div class="mb-3 row">
                <label for="validationServer01" class="col-form-label">First name</label>
                <div class="col-sm-12">
                <input type="text" name="firstname" class="form-control" id="validationServer01" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="validationServer02" class="col-form-label">Last name</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" name="lastName" id="validationServer02" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="validationServerUsername" class="col-form-label">Create Username</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    <input type="text" class="form-control is-invalid" name="username" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-form-label">Create New Password</label>
                <div class="col-sm-12">
                <input type="password" class="form-control is-valid" name="password" id="inputNewPassword">
                </div>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-form-label">Confirm New Password</label>
                <div class="col-sm-12">
                <input type="password" class="form-control is-valid" name="conpassword" id="inputConfirmPassword">
                </div>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <!-- <div class="col-12">
                <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                <label class="form-check-label" for="invalidCheck3">
                    Agree to terms and conditions
                </label>
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    You must agree before submitting.
                </div>
                </div>
            </div> -->
            <div class="col-12">
                <input class="btn btn-primary s1" id="register_submit" name="register_submit" type="submit" value="Register">
            </div>
        </form>
    </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="../Scripts/script_registration.js"></script>
    

</body>
</html>