<?php
$_SERVER="sql313.epizy.com";
$username="epiz_28202064";
$password="GvqGJahzxey";
$database="epiz_28202064_spark_bank";

$connection=mysqli_connect($_SERVER,$username,$password,$database);
if(!$connection){
    die("Connection to this database failed".mysqli_connect_error());
}
// echo "<script>alert('connection established with the database=`$database`')</script>";
?>
