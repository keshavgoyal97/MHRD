
<!DOCTYPE html>
<html>
<head>
<title>Schemes And Scholarships</title>
<style>
table, th, td
{
border: 1px solid black;
}
table
{
width:60%;
}
</style>
</head>
<body>

<form action="scholarahipndscheme.php" method="POST">
<input type="text" name="name" placeholder="search by Name only ..." ><br>
<input type="submit" value="search" name="submit"><br><br>
</form>
</body>
</html>

<?php

    
    include'test4.php';
    # $sql="use Project";
    $sql="use Project";
    if(isset($_POST['submit'])&&!empty($_POST['submit']))
    {
        $name=$_POST['name'];
        mysqli_query($link,$sql);
        $sql="select * from Scholarships where Name='$name'";
        $result=mysqli_query($link,$sql);
        if(mysqli_num_rows($result)>0)
        {
            echo "<table>";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Start Date</th>";
            echo "<th>Last Date</th>";
            // echo "<th>Password</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                // echo "<pre>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" .$row['Starting date']."</td>";
                echo "<td>" .$row['Last date']."</td>";
                // echo "<td>" . $row['password'] . "</td>";
                // echo"</pre>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
            echo"Enter a valid Name";
        echo"<br><br><br>";
            }
    $sql="use Project";
    mysqli_query($link,$sql);
    
$sql = "SELECT * FROM Scholarships";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo"<h1>Scholarships</h1>";
        echo"<hr>";
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Start Date</th>";
                echo "<th>Last Date</th>";
               // echo "<th>Password</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
           // echo "<pre>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" .$row['Starting date']."</td>";
                echo "<td>" .$row['Last date']."</td>";
               // echo "<td>" . $row['password'] . "</td>";
           // echo"</pre>";
            echo "</tr>";
        }
        echo "</table>";
        echo"<br><br><br>";
        include'scheme.php';
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>



























