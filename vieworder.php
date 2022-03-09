<?php

include "connect.php";

if (isset($_GET["id"]) and !empty($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "SELECT * FROM `students` WHERE id=$id";

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
<div class="row m-2">
    <div class="card col-md-3 m-2">
        <div class="card-body">
            <div class="m-3 p-3">
                <img src="<?php echo $filepath?>" alt="Loading" height="150" width="150">
            </div>

        </div>
    </div>
    <div class="card col-md-6 m-2 bg-primary text-white">
        <div class="card-body">
            <div>
                <label class="form-label h6">FULL NAME</label>
                <p><?php echo $fullname; ?></p>
            </div>
            <hr>

            <div>
                <label class="form-label h6">EMAIL ADDRESS</label>
                <p><?php echo  $email; ?></p>
            </div>
            <div>
                <label class="form-label h6">MESSAGE</label>
                <p><?php echo $message;  ?></p>
            </div>
            <hr>

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