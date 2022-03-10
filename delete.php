<?php



session_start();

// check if user has looged in?
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

   header("location:admin.php");
   exit();
}



include "connect.php";



if (isset($_POST["submit"]) and !empty($_POST["id"])){

    $id =$_POST["id"];

    $sql = "DELETE FROM `design` WHERE id=$id";

    $result = mysqli_query($link,$sql);

    if ($result){
        echo "<div class='del'>";
        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-warning'>Record deleted Successfully</p>";
        echo "<a class='btn btn-primary col-md-4' href='vieworder.php'>BACK</a>";
        echo "</div>";
        echo "</div>";

    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }

}else{

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Order</title>
    <link rel="stylesheet" href="css/hrstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>



    <div class="row m-2">
        <div class="alert alert-danger">
            <form action="delete.php" method="post">
                <div class="p-2 text-center">
                    <label class="form-label"> Are you sure you want to delete this record?</label> <br>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                </div>

                <div class="p-2 text-center">
                    <input type="submit" name="submit" value="YES" class="btn btn-danger col-md-3">
                    <a href="vieworder.php" class="btn btn-primary col-md-3">NO</a>
                </div>
            </form>

        </div>



    </div>


    <?php }?>
</body>

</html>