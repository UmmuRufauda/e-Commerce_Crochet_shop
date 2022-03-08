<?php
include "connect.php";

if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $secondname =$_POST['secondname'];
    $email =$_POST['email'];
    $message =$_POST['message'];


    // photo
    $photoname =$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder= "uploads/".$photoname;




    //insert
    $sql = "INSERT INTO `design`(`firstname`, `secondname`, `email`, `design`, `message`)
    VALUES ('$firstname','$secondname','$email','$photoname','$message')";

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

echo'<a class="btn btn-danger" href="index.php">BACK</a>';


?>