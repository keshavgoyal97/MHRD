

<?php
$servername = "localhost";
$username = "root";
$password = "30121014";
$db_name = "sample_db";

$conn = mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
	echo "connection failed";

$sql = "select r_id,schoolname,type,city from schooldetails";

$result = mysqli_query($conn,$sql);
echo "<table>";
echo "<tr><th>ID</th><th>Schoolname</th><th>type</th><th>City</th>";
if(mysqli_num_rows($result) >0)
{ while($row = mysqli_fetch_assoc($result)){
   echo "<tr><td>".$row["r_id"]."</td><td>".$row["schoolname"]."</td><td>".$row["type"]."</td><td>".$row["city"]."</td><td>";
}
echo"</table>";}
?>


<html>
<body>

<form action = "approveschool.php" method="post">
<br><br><br>
<p>Enter The application number to approve a new school</p>
<input type = "number" name="schoolid">

</form>
</body>
</html>
