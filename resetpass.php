<?php
include "connect.php";

if(isset($_POST["update"])) {

$id = $_POST["id"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

if (strlen($password)<8){
        $passError = "Password must have more than 8 characters";
        echo $passError;

    }else{
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }
    if($cpassword!=$password){
        $conPassErr = "Password do not match";
        echo $conPassErr;
    }


$reset_sql="UPDATE `user` SET `password`='[$password]' WHERE id = $id";

$reset_result=mysqli_query($link,$reset_sql);

if ($reset_result){


echo "<div class='row m-2 text-center'>";
    echo "<p class='alert alert-success'>Password has been reset successfully</p>";
    echo "<a class='btn btn-primary col-md-4' href='index.php'>Login</a>";
    echo "</div>";



}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/hrstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>


    <div class="logindiv">
        <div class="row m-2">
            <div class="card">
                <div class="card-header text-primary bg-white h4">Reset Password</div>
                <div class="card-body">
                    <form action="resetpass.php" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">New Password</span>
                            <input type="password" name="password" class="form-control" aria-describedby="basic-addon1"
                                required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">Confirm Password</span>
                            <input type="password" name="cpassword" class="form-control" aria-describedby="basic-addon2"
                                required>
                        </div>

                        <div class="input-group mb-3">
                            <input type="submit" name="update" value="RESET PASSWORD" class="btn btn-danger col-md-4 ">
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</body>

</html>