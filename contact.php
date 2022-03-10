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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggest Your Design </title>
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
    <div class="row">

        <div class="col-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.1263569444745!2d39.70336291448411!3d-3.9944308457008937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18400db430d6d037%3A0x5532cadf45ff2270!2sOld%20Malindi%20Rd%2C%20Mombasa!5e0!3m2!1sen!2ske!4v1646405280759!5m2!1sen!2ske"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="col-6">
            <form action="handlecontact.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-20">
                        <label>Full Name</label>
                    </div>
                    <div class="col-80">
                        <input type="text" name="fullname" placeholder="Full Name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                        <label>Email Address</label>
                    </div>
                    <div class="col-80">
                        <input type="emil" name="email" placeholder="Your Email Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-20">
                        <label>Phone Number</label>
                    </div>
                    <div class="col-80">
                        <input class="inputstyle" type="tel" name="number" placeholder="+254 007089562">
                    </div>
                </div>
                <div class="row">

                    <div class="col-80">
                        <input class="fileinput" type="file" name="photo">
                    </div>
                    <div class="col-80">
                        <textarea type="text" name="message" placeholder="write Something Here...."
                            style="height: 150px;"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Make Order" name="submit" class="btnsubmit">
                    </div>
                </div>

            </form>
        </div>

    </div>


    <footer class="row bg-white">

        <div class="text-center p-2">
            <small class="grey">&copy; Hand made with love 2022 </small>
        </div>


    </footer>
</body>

</html>