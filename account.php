<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/hrstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>


<body>
    <div class="container">
        <div class="avatar">
            <img src="images/ictsupport.png" alt="">
        </div>
        <div class="loginDiv">
            <div class="col-6">
                <form action="handlelogin.php" method="post">
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
                        <div class="col-4">
                            <input type="submit" value="Login" name="login" class="btnsubmit">
                        </div>
                        <div class="col-4">
                            <a href="resetpass.php">Forgot Passwod</a>

                        </div>
                        <div class="col-4">
                            <a href="createAcc.php">Dont have an Account</a>


                        </div>


                    </div>

                </form>
            </div>


        </div>


    </div>

</body>

</html>