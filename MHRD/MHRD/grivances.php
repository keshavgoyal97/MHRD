
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
width:70%;
}
</style>
</head>
<body>
<form action="grivances.php" method="POST">
<input type="text" name="id" placeholder="search by ID only ..." ><br>
<input type="submit" value="search" name="submit"><br><br>
</form>

</body>
</html>

<?php
    
    
    include'test4.php';
    session_start();
    
    $sql="use Project";
    if(isset($_POST['submit'])&&!empty($_POST['submit']))
    {
        $id=$_POST['id'];
        mysqli_query($link,$sql);
        $sql="select * from `Grievances` where ID='$id'";
        $result=mysqli_query($link,$sql);
        if(mysqli_num_rows($result)>0)
        {
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Institute Name</th>";
            echo "<th>Complaint Type</th>";
            echo "<th>Complaint</th>";
            # echo "<th>Pincode</th>";
            // echo "<th>Password</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                // echo "<pre>";
                echo "<td>". $row['Id'] ."</td>";
                echo "<td>" . $row['Institution Name'] . "</td>";
                echo "<td>" .$row['Complaint Type']."</td>";
                echo "<td>" .$row['complaint']."</td>";
                #echo "<td>" .$row['pincode']."</td>";
                // echo "<td>" . $row['password'] . "</td>";
                // echo"</pre>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
            echo"please enter a valid id";
        echo"<br><br><br><br>";
    }
    $sql="use Project";
    if(mysqli_query($link,$sql)){
    $sql = "SELECT * FROM `Grievances`";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Institute Name</th>";
            echo "<th>Complaint Type</th>";
            echo "<th>Complaint</th>";
            # echo "<th>Pincode</th>";
            // echo "<th>Password</th>";
            echo "</tr>";
            
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                // echo "<pre>";
                echo "<td>". $row['Id'] ."</td>";
                echo "<td>" . $row['Institution Name'] . "</td>";
                echo "<td>" .$row['Complaint Type']."</td>";
                echo "<td>" .$row['complaint']."</td>";
                #echo "<td>" .$row['pincode']."</td>";
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
    }
    else
    echo "!ERROR";

  //  $_SESSION['usernameD']=NULL;
    // Close connection
    mysqli_close($link);
    ?>



























