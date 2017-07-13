
<?php
    session_start();
    if(!empty($_SESSION['usernameD'])||!empty($_SESSION['usernameM']))
{}
else
die("PLAESE LOGIN");
    ?>
<!DOCTYPE html>
<html>
<head>
<h1>Funds For Institute</h1>
<hr>
<title>Funds For Institute</title>
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
    
    
    include'test4.php';
    
    $sql="use Project";
    if(mysqli_query($link,$sql)){
    $sql = "SELECT Institutions.Name,Funds.Transaction_Id,Funds.Amount,Inst_fund.Date FROM `Institutions`,`Funds`,`Inst_fund` where Inst_fund.Name=Institutions.Name and Inst_fund.Transaction_Id=Funds.Transaction_Id";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>Institute Name</th>";
            echo "<th>Transaction Id</th>";
            echo "<th>Amount</th>";
             echo "<th>Date</th>";
            // echo "<th>Password</th>";
            echo "</tr>";
            
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                // echo "<pre>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" .$row['Transaction_Id']."</td>";
                echo "<td>" .$row['Amount']."</td>";
                echo "<td>" .$row['Date']."</td>";
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
    
    // Close connection
    mysqli_close($link);
    ?>



























