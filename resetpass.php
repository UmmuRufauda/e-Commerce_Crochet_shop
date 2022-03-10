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

<div class="row m-2">
    <div class="card">
        <div class="card-header text-primary bg-white h4">Reset Password</div>
        <div class="card-body">
            <form action="reset.php" method="post" enctype="multipart/form-data">
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
                    <input type="submit" name="submit" value="RESET PASSWORD" class="btn btn-danger col-md-4 ">
                </div>



            </form>
        </div>
    </div>
</div>