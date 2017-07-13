
<!DOCTYPE html>
<html>
<head>
<h1>List of Schools</h1>
<hr>
<title>List OF Schools</title>
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

<form action="lstofschool.php" method="POST">
<input type="text" name="id" placeholder="search by ID only ..." ><br>
<input type="submit" value="search" name="submit"><br><br>
</form>
</body>
</html>

<?php

    
    include'test4.php';
    $sql="use Project";
    if(isset($_POST['submit'])&&!empty($_POST['submit']))
    {
        $id=$_POST['id'];
        mysqli_query($link,$sql);
        $sql="SELECT ID , Name,`Educational Board` FROM schools where ID='$id'";
        $result=mysqli_query($link,$sql);
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Educational Board</th>";
            // echo "<th>Password</th>";
            echo "</tr>";
            ;
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                // echo "<pre>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" .$row['Name']."</td>";
                echo "<td>" .$row['Educational Board']."</td>";
                // echo "<td>" . $row['password'] . "</td>";
                // echo"</pre>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
            echo"please enter a valid id";
        echo"<br><br><br><br>";
        echo"<hr>";
    }
    
    $sql="use project";
    mysqli_query($link,$sql);
$sql = "SELECT ID , Name,`Educational Board` FROM schools";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Educational Board</th>";
               // echo "<th>Password</th>";
            echo "</tr>";
        ;
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
           // echo "<pre>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" .$row['Name']."</td>";
                echo "<td>" .$row['Educational Board']."</td>";
               // echo "<td>" . $row['password'] . "</td>";
           // echo"</pre>";
            echo "</tr>";
        }
        echo "</table>";
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



























