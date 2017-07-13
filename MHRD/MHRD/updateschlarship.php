<!DOCTYPE html>
<html>
<head>
<h1>Grievances</h1>
<hr>
<title>Grievances</title>
<style>
table, th, td
{
border: 1px solid black;
}
table
{
width:50%;
}
</style>
</head>
<body>
</body>
</html>
<?php
    $servername = "localhost";
$username = "root";
$password = "30121014";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Inst_Sch";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Institute Name</th>";
        echo "<th>Scholarship Name</th>";
        echo "<th>Max. Applicants</th>";
       // echo "<th>Complaint</th>";
        # echo "<th>Pincode</th>";
        // echo "<th>Password</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            // echo "<pre>";
           // echo "<td>". $row['Id'] ."</td>";
            echo "<td>" . $row['Institute Name'] . "</td>";
            echo "<td>" .$row['Scholarship Name']."</td>";
            echo "<td>" .$row['Max. Applicants']."</td>";
            #echo "<td>" .$row['pincode']."</td>";
            // echo "<td>" . $row['password'] . "</td>";
            // echo"</pre>";
            echo "</tr>";
        }
        echo "</table>";
    } else
        echo "0 results";

mysqli_close($conn);
?>



<html>
<body>
<form action="insertmax.php" method="POST">
<h1>Enter the name of the Scholarship to update the number of max applicants </h1>
Institute Name
<input type="text" name ="Iname">
Scholarship Name
<input type="text" name ="Sname">
New value of max applicants 
<input type="number" name="newmax">
<input type= "submit" value="submit">
</form>
</body>
</html>
