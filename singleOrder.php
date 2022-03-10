<?php


session_start();

// check if user has looged in?
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

header("location:account.php");
exit();
}

include "connect.php";

if (isset($_GET["id"]) and !empty($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "SELECT * FROM `design` WHERE id=$id";

    $result = mysqli_query($link, $sql);

    if ($result) {

        $data = mysqli_num_rows($result);

        if ($data == 1) {

            $row = mysqli_fetch_array($result);

            $fullname = $row['fullname'];
            $email= $row['email'];
            $photo = $row['photo'];
            $message = $row['message'];
            

            $filepath = "uploads/$photo";

            ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single Order</title>
    <link rel="stylesheet" href="css/hrstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <nav>
        <div class="navbar">
            <ul class="styleul">
                <li><a href="index.php">Home </a></li>
                <li><a href="about.php">About </a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="createAcc.php">Account</a></li>
                <li><a href="vieworder.php">View Order</a></li>
                <li><a href="singleOrder.php">Single Order</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
    </nav>


    <div class="logindiv">
        <div class="card-body ">
            <div class="m-3 p-3">
                <img src="<?php echo $filepath?>" alt="Loading" height="150" width="150">

            </div>
        </div>
        <div class="card col-md-6 m-2 bg-success text-white">
            <div class="card-body">
                <div>
                    <label class="form-label h6">FULL NAME</label>
                    <p><?php echo $fullname; ?></p>
                </div>
                <hr>
                <div>
                    <label class="form-label h6">EMAIL</label>
                    <p><?php echo $email; ?></p>
                </div>
                <hr>
                <div>
                    <label class="form-label h6">Detail</label>
                    <p><?php echo  $message; ?></p>
                </div>

                <div>
                    <div class="m-2 p-3">
                        <a href="vieworder.php" class="btn btn-warning col-md-12"> BACK</a>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <?php

        } else {
            echo "No record was found";
        }


    } else {
        echo "error executing query $sql" . mysqli_error($link);
    }
} else {
    echo "id value not picked";
}
?>
</body>

</html>