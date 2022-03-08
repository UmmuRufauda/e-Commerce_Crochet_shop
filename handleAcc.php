<?php
include "connect.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

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
    if(empty($passError) and empty($conPassErr)){
     

$sql = "INSERT INTO `useracc`(`email`, `username`, `password`) VALUES ('$email','$username','$storePass')";


$result = mysqli_query($link, $sql);

if($result){
    echo"You have been registered";
    header("location:account.php");
}else{
    echo"Error executing query".mysqli_error($link);
}

 
}
mysqli_close($link);

}

?>