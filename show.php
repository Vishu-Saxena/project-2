<?php
$servername = "localhost";
$username = "root";
$password = "";
//$password = "F&-25mUzU&xrSv[N";
$database = "college";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());
}
//$sql = "SELECT * FROM `mytable`";
//$result = mysqli_query($conn, $sql);
?>
