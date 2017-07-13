<html>
<head>
<h1>List of Funds</h1>
<hr>
<title>List OF Funds</title>
<style>
table, th, td
{
border: 1px solid black;
}
table
{
width:40%;
}
</style>
</head>
<body>

</form>

</body>
</html>
<?php
    include'test2.php';
    $sql="use Project";
    if(mysqli_query($conn,$sql)){

$sql = "SELECT * FROM applyfund";
if($result=mysqli_query($conn, $sql))
{
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Amount</th>";
    // echo "<th>Password</th>";
    echo "</tr>";    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        // echo "<pre>";
        echo "<td>" . $row['ApplicationNumber'] . "</td>";
        echo "<td>" .$row['InstiName']."</td>";
        echo "<td>" .$row['Amount']."</td>";
        // echo "<td>" . $row['password'] . "</td>";
        // echo"</pre>";
        echo "</tr>";
    }
    echo "</table>";

} else
    echo "0 results";

    }
        else
            echo"!ERROR";
    }
    else
    echo"!ERROR";
mysqli_close($conn);
?>  

<html>
<body>
<p>Enter the Application Id to approve </p>
<form action="approvefund.php" method="POST">
<input type= "number" name="appnum" >
<input type = "submit" name= "submit">
</body>
</html>
