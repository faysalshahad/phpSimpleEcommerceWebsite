<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boysshopping";
# database name is boysshopping, localhost is the server, root is the user name and password field is empty
$con =new mysqli($servername,$username,$password,$dbname);

if ($con) {
    # code...
    # echo ("Connection to Database is Successful");
} else {
    # code...
    echo ("There is an error to connect to the database. 
    Please check your internet, connection or codes.");
    die(mysqli_error());
}
?>