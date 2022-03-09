//<?php

//session_start();

// check if user has looged in?
//if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

    header("location:index.php");
    exit();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About the Shop</title>
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

    <section>
        <h1 class="center">Know about Crochet Products</h1>

        <div class="container-fluid mt-3">

            <div class="row">


                <div class="crochetintros">
                    <h2>Crochet</h2>
                    <p>Is an art of making diffrenet product using fabric thread.</p>
                </div>
                <p>Crochet Shop we sale Crochet designed product. <br> Your can <a href="contact.php">Suggest Your
                        design here</a>. The Design you suggest will be designed for you. <br>tHaNkS tO oUr hApPy
                    Customers</p>

                <div class="flexbox">
                    <div>
                        <img src="images/baby.png" height="300" width="300" alt="">
                    </div>
                    <div>
                        <img src="images/pencilporch.jpg" height="300" width="300" alt="">
                    </div>
                    <div>
                        <img src="images/jh.jpg" height="300" width="300" alt="">
                    </div>
                    <div>
                        <img src="images/sidebag.jpg" height="300" width="300" alt="">
                    </div>



                </div>
            </div>

        </div>
        </div>
    </section>

    <footer class="row bg-white">

        <div class="text-center p-2">
            <small class="grey">&copy; Hand made with love 2022 </small>
        </div>


    </footer>
</body>

</html>