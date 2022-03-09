<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order</title>
    <link rel="stylesheet" href="css/hrstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>

    <div class="row m-2 p-2">
        <?php
include "connect.php";

$sql = "SELECT * FROM `design`";

$result = mysqli_query($link,$sql);

if ($result){

    $data = mysqli_num_rows($result);

       if ($data>0){

           echo "<table class='table table-striped table-hover'>";
           echo "<tr>";
           echo "<th>#</th>";
           echo "<th>Full Name</th>";
           echo "<th>Email Address</th>";
            echo "<th>Message</th>";
           echo "<th>Actions</th>";
           echo "</tr>";
           while ($row=mysqli_fetch_array($result)){
               echo "<tr>";
               echo "<td>".$row['id']."</td>" ;
               echo "<td>".$row['fullname']."</td>" ;
               echo "<td>".$row['email']."</td>" ;
               echo "<td>".$row['message']."</td>" ;
               echo " <td>
                   
                    <a class='m-2' href='delete.php?id=".$row['id']."'><span class='fa fa-trash'></span></a>
                    <a class='m-2' href='update.php?id=".$row['id']."'><span class='fa fa-pencil'></span></a>
                    <a class='m-2' href='view.php?id=".$row['id']."'><span class='fa fa-eye'></span></a>
                    </td>";

               echo "</tr>";

           }


           echo "</table>";




       }else{
           echo "<p class='alert alert-primary'>No Record was found in the database</p>";
       }



}else{
    echo "Error executing query $sql".mysqli_error($link);
}

?>
    </div>

</body>

</html>