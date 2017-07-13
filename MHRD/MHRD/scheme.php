
<!DOCTYPE html>
<html>
<head>
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
<form action="scholarahipndscheme.php" method="POST">
<input type="text" name="id" placeholder="search by ID only ..." ><br>
<input type="submit" value="search" name="submit1"><br><br>
</form>

</body>
</html>

<?php
    include'test4.php';
    $sql="use Project";
   mysqli_query($link,$sql);
    if(isset($_POST['submit1'])&&!empty($_POST['submit1']))
    {
        $id=$_POST['id'];
        //mysqli_query($link,$sql);
        $sql = "SELECT  * FROM schemes where id='$id'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Type</th>";
                // echo "<th>Password</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    // echo "<pre>";
                    echo "<td>" . $row['Id'] . "</td>";
                    echo "<td>" .$row['Name']."</td>";
                    echo "<td>" .$row['Type']."</td>";
                    // echo "<td>" . $row['password'] . "</td>";
                    // echo"</pre>";
                    echo "</tr>";
                }
                echo "</table>";        }
            else
            echo"please enter a valid id";
        echo"<br><br><br><br>";
    }
    }
    
    $sql = "SELECT  * FROM schemes";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo"<h1>Schemes</h1>";
        echo"<hr>";
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Type</th>";
               // echo "<th>Password</th>";
            echo "</tr>";
        ;
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
           // echo "<pre>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" .$row['Name']."</td>";
                echo "<td>" .$row['Type']."</td>";
               // echo "<td>" . $row['password'] . "</td>";
           // echo"</pre>";
            echo "</tr>";
        }
        echo "</table>";
        //mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>



























