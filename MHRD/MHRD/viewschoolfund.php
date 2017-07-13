<!DOCTYPE html>
<html>
<head>
<h1>Funds For Schools</h1>
<hr>
<title>Funds For Schools</title>
<style>
table, th, td
{
border: 1px solid black;
}
table
{
width:70%;
}
</style>
</head>
<body>
</body>
</html>
<?php
    
    include 'connect.php';

$sql = "SELECT Id,Transaction_Id,Date FROM sch_fund";
$result = mysqli_query($conn, $sql);
echo "<table>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<tr><th>School Id</th> <th>Transaction_Id</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["Id"]."</td><td>".$row["Transaction_Id"]."</td><td>".$row["Date"]."</td><br>";
    }
     echo"</table>";} else {
    echo "0 results";
}

mysqli_close($conn);

?>
