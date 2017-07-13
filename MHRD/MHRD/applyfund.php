<?php 
$servername = "localhost";
$username = "root";
$password = "30121014";
$db_name = "project";

$conn = mysqli_connect($servername,$username,$password,$db_name);

if(!$conn)
{ die("connection failed".mysqli_connect_error());}

$instiName = $_POST['instiName'];
$purpose = $_POST['purpose'];
$amount = $_POST['amount'];
$details = $_POST['comment'];
    
$sql = "insert into applyfund(InstiName,Purpose,Amount) value('$instiName','$purpose','$amount) ";

if(mysqli_query($conn,$sql))
 echo "executed successfully";
else
  echo "erroe";

	
?>
