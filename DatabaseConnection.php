<?php
$_SERVER="localhost";
$username="root";
$password="";
$database="transfer_money";

$connection=mysqli_connect($_SERVER,$username,$password,$database);
if(!$connection){
    die("Connection to this database failed".mysqli_connect_error());
}
// echo "<script>alert('connection established with the database=`$database`')</script>";
?>
