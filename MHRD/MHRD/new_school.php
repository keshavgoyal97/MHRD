<?php
$servername = "localhost";
    $username = "root";
    $password = "30121014";
$dbname = "project";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("connection failed: ".mysqli_connect_error());}

$schoolname = $_POST['schoolname'];
$type = $_POST['type'];
$city = $_POST['city'];
$locality = $_POST['locality'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$area = $_POST['area'];
$board = $_POST['board'];
$strength = $_POST['strength'];
$staff = $_POST['staff'];
$comment = $_POST['comment'];

$sql = "insert into schooldetails(schoolname,type,city,locality,pincode,state,area,board,strength,staff,comment) values('$schoolname','$type','$city','$locality','$pincode','$state','$area','$board','$strength','$staff','$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
	
	


?>
