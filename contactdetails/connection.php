<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if($conn)
{
    // echo"Connection established.........";
}else{
    echo"Connection not established".mysqli_connect_error();
}
?>