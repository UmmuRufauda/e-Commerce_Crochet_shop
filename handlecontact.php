<?php

include "connect.php";

if (isset($_POST['submit'])){
    $fullname = $_POST['fname'];
    $email =$_POST['email'];
    $message =$_POST['message'];


    // photo
   // $pic=$_FILES["pic"]["name"];
    //$tempname=$_FILES["pic"]["tmp_name"];
    //$folder= "uploads/".$pic;


    //insert
    $sql = "INSERT INTO `design`( `fullname`, `email`,`message`)
    VALUES ('$fullname','$email','$message')";

$result = mysqli_query($link,$sql);

     // photo
    if (move_uploaded_file($tempname,$folder)){

        echo "<p class='alert alert-info'>Photo uploaded successfully</p>";
    }else{
        echo "<p class='alert alert-info'>Photo Not uploaded</p>";
    }

    if ($result){
        echo "<p class='alert alert-success'>Records have been Added</p>";
    }else{

        echo "<p class='alert alert-danger'>Error executing query $sql</p>".mysqli_error($link);
    }


}

echo'<a class="btn btn-warning" href="index.php">Home</a>';


?>