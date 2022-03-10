<?php
session_start();

// check if user has looged in?
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

header("location:account.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>
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
                <li><a href="account.php">Account</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>


    <h1 class="center">Crochet Products</h1>
    <div class="container-fluid mt-3">

        <div class="row">
            <div class="col-4 ">

                <div class="card" style="width:400px">
                    <img class="card-img-top" src="images/sidebag.jpg" height="350" width="350" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Side Bag</h4>
                        <p class="card-text">Price ksh. 550</p>
                        <button><a href="contact.php"><i class="fa fa-shopping-cart">order</i></a></button>
                    </div>
                </div>
            </div>
            <div class="col-4 ">

                <div class="card" style="width:400px">
                    <img class="card-img-top" src="images/baby.png" height="350" width="350" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">baby turban and shoes</h4>
                        <p class="card-text">Price ksh. 600</p>
                        <button><a href="contact.php"><i class="fa fa-shopping-cart">order</i></a></button>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="images/shoes.jpg" height="350" width="350" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">baby shoes</h4>
                        <p class="card-text">Price ksh. 300</p>
                        <button><a href="contact.php"><i class="fa fa-shopping-cart">order</i></a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4 ">

                <div class="card" style="width:400px">
                    <img class="card-img-top" src="images/pencilporch.jpg" height="350" width="350" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Pencil porch</h4>
                        <p class="card-text">Price ksh. 350</p>
                        <button><a href="contact.php"><i class="fa fa-shopping-cart">order</i></a></button>
                    </div>
                </div>
            </div>
            <div class="col-4 ">

                <div class="card" style="width:400px">
                    <img class="card-img-top" src="images/7.jpg" height="350" width="350" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Parse</h4>
                        <p class="card-text">Price ksh. 200</p>
                        <button><a href="contact.php"><i class="fa fa-shopping-cart">order</i></a></button>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="images/dreban.jpg" height="350" width="350" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">baby dress and turban</h4>
                        <p class="card-text">Price ksh. 700</p>
                        <button><a href="contact.php"><i class="fa fa-shopping-cart">order</i></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="row bg-white">

        <div class="text-center p-2">
            <small class="grey">&copy; Hand made with love 2022 </small>
        </div>


    </footer>
</body>

</html>