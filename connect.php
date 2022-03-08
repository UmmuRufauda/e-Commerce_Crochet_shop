<?php
$link = mysqli_connect("localhost","root", "","crochet");

if($link == false){
    die("error connecting to server".mysqli_connect_error($link));
}