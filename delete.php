<?php


session_start();


//check if user has loged in ?
if(!isset($_SESSION['loggedin']) or $_SESSION['loggedin']!==true){
    header("Location:index.php");
    exit();
}



include "connect.php";



if (isset($_POST["submit"]) and !empty($_POST["id"])){

    $id =$_POST["id"];

    $sql = "DELETE FROM `design` WHERE id=$id";

    $result = mysqli_query($link,$sql);

    if ($result){

        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-warning'>Record deleted Successfully</p>";
        echo "<a class='btn btn-primary col-md-4' href='participants.php'>BACK</a>";
        echo "</div>";

    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }



}else{

?>

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