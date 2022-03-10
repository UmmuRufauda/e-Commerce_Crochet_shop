<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Admin Account</title>
    <link rel="stylesheet" href="css/hrstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>


<body>


    <div class="loginDiv">
        <form action="handleadminAcc.php" method="post">
            <h3>Create an account Here</h3>
            <div class="row">
                <div class="col-20">
                    <label>Email</label>
                </div>
                <div class="col-80">
                    <input type="email" name="email" placeholder="Email">
                </div>
            </div>

            <div class="row">
                <div class="col-20">
                    <label>Username</label>
                </div>
                <div class="col-80">
                    <input type="text" name="username" placeholder="Username">
                </div>
            </div>

            <div class="row">
                <div class="col-20">
                    <label>Password</label>
                </div>
                <div class="col-80">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="col-20">
                    <label>Confirm Password</label>
                </div>
                <div class="col-80">
                    <input type="password" name="cpassword" placeholder="Confirm Password">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="submit" value="Create" name="submit" class="btnsubmit">
                </div>
                <div class="col-4">
                    <p>Have an Account</p><a href="admin.php">Login</a>
                </div>

            </div>
        </form>
    </div>
</body>

</html>