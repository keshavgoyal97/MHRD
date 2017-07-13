<style>
 table,th,td
{
border:1px solid black;
}
table
{
width:40%;
}
</style>
<title>Pending Requests</title>
<h1>Pending Requests</h1>
<hr>
<?php
include 'test4.php';
$sql = "use project";

 mysqli_query($link, $sql);
$sql = "select r_id,schoolname,city,board from schooldetails";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
     echo "<table><tr><th>ID</th><th>SchoolName</th><th>Board</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['r_id']."</td><td>".$row['schoolname']."</td><td> ".$row['city']."</td><td>".$row['board']."</td></tr>";
    }
    echo "</table>";
    
}

 else {
    echo "0 results";
}



mysqli_close($link);

?>





<html>
<body>
<br>
<p>Enter the Application Id to approve </p>
<form action="approveschool.php" method="POST">
<input type= "number" name="r_id" >
<input type = "submit" name= "submit">
</form>
</body>
</html>
