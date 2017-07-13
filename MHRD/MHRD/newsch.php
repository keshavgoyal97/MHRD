<?php
$servername = "localhost";
    $username = "root";
    $password = "30121014";
$db_name = "sample_db";

$conn = mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{ echo"connection failed";}

$schname = $_POST['schname'];
$start = $_POST['start'];
$last = $_POST['last'];
$criteria = $_POST['criteria'];

$sql = "insert into scholaships(Name,'Starts from','last date to apply','eligibility criteria') values($schname,$start,$last,$criteria)";

if($sql)
{ echo"new record added successfully";}


?>
