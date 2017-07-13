
<!DOCTYPE html>
<html>
<head>
<h1>Land Allocation Of Institutions</h1>
<hr>
<title>Land Allocation Of Institutions</title>
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
<form action="lalloc.php" method="POST">
<input type="text" name="name" placeholder="search by Name only ..." ><br>
<input type="submit" value="search" name="submit"><br><br>
</form>

</body>
</html>

<?php
    
    
    include'test4.php';
    
    $sql="use project";
    if(isset($_POST['submit'])&&!empty($_POST['submit']))
    {
        $n=$_POST['name'];
        mysqli_query($link,$sql);
        $sql="select * from `Land allocation` where name='$n'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Area(sq. yards)</th>";
                echo "<th>State</th>";
                echo "<th>Pincode</th>";
                // echo "<th>Password</th>";
                echo "</tr>";
                
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    // echo "<pre>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" .$row['Area in sq. yards']."</td>";
                    echo "<td>" .$row['state']."</td>";
                    echo "<td>" .$row['pincode']."</td>";
                    // echo "<td>" . $row['password'] . "</td>";
                    // echo"</pre>";
                    echo "</tr>";
                }
                echo "</table>";
                
            }
            else
                echo"enter a valid name";
        }
        echo"<hr>";
        echo"<br><br><br>";
    }
$sql="use Project";
            if(mysqli_query($link,$sql)){
    $sql = "SELECT * FROM `Land allocation`";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Area(sq. yards)</th>";
            echo "<th>State</th>";
            echo "<th>Pincode</th>";
            // echo "<th>Password</th>";
            echo "</tr>";
            
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                // echo "<pre>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" .$row['Area in sq. yards']."</td>";
                echo "<td>" .$row['state']."</td>";
                echo "<td>" .$row['pincode']."</td>";
                // echo "<td>" . $row['password'] . "</td>";
                // echo"</pre>";
                echo "</tr>";
            }
            echo "</table>";
            # include file for school land alloc
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    }
    else
    echo "!ERROR";
    
    // Close connection
    mysqli_close($link);
    ?>



























