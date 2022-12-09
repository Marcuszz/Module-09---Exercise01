<?php
$dbconnect = mysqli_connect("localhost", "pdc20user", "password", "pdc20");
if (mysqli_connect_errno()){
    echo "Failed to connect to Mysql : ". mysqli_connect_error();
    die();
}
?>