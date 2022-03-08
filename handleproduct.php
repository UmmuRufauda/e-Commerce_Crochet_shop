<?php

session_start();

include "connect.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cart</title>
    <link rel="stylesheet" href="css/hrstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>

    <div class="container" style="width: 400px;">

        <h3 class="center">shopping cart</h3>
        <?php
$query = "SELECT * FROM `design`";
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){

?>






        ?>
    </div>

</body>

</html>