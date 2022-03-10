<?php
include "connect.php";

session_start();

if(isset($_POST['login'])){
    $Accusername = $_POST['username'];
    $Accpassword = $_POST['password'];
   


    //compare
    $sql_query = "SELECT * FROM `admin` WHERE username='$Accusername'";
    $result = mysqli_query($link, $sql_query);

    if($result){
        $data = mysqli_num_rows($result);

        if ($data==1){

            while ($row=mysqli_fetch_array($result)){

                $id = $row['id'];
                $username = $row['username'];
                $email = $row["email"];
                $password = $row["password"];
               
                
                
                
                // verify the password
                if (password_verify($Accpassword,$password)){
                     
                 if($row["usertype"]==1){
                         
                    $_SESSION["loggedin"]=true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"]=$username;
                    


                    header("location:indexadmin.php");

                    }elseif($row["usertype"]==0){
                    $_SESSION["loggedin"]=true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"]=$username;
                    

                    header("location:index.php");
                    }else{
                        echo "please ask admin to assign you a usertype";
                    }
                    
                    header("location:indexadmin.php");
                    
                }else{
                    echo "Passwords are not matching";
                }
            }
        }else{
            echo "No such email address found";
        }
    }
}
?>