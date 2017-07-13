
<?php
    session_start();
    if(!empty($_SESSION['usernameD']))
    {}
    else if(!empty($_SESSION['usernameM']))
    {}
    else
    die("PLAESE LOGIN");
    ?>
<!DOCTYPE html>
<html>
<head>
<h1>Funds For Institutions</h1>
<hr>
<title>Funds For Institutions</title>
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

<form action="funds.php" method="POST">
<input type="text" name="id" placeholder="search by Name only ..." ><br>
<input type="submit" value="search" name="submit"><br><br>
</form>
</body>
</html>

<?php
    # here id is name
    
    include'test4.php';
    
    /*if(!empty($_SESSION['usernameD'])&&!empty($_SESSION['pwd']))
    echo "<p>Working</>";*/
    $sql="use Project";
    if(isset($_POST['submit'])&&!empty($_POST['submit']))
    {
        $id=$_POST['id'];
        mysqli_query($link,$sql);
        $sql="SELECT Institutions.Name,Funds.Transaction_Id,Funds.Amount,Inst_fund.Date FROM inst_fund,institutions,funds where inst_fund.name=institutions.name and inst_fund.transaction_id=funds.transaction_id and institutions.name='$id'";
       // $result=mysqli_query($link,$sql);
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th>Institute Name</th>";
                echo "<th>Transaction Id</th>";
                echo "<th>Amount</th>";
                echo "<th>Date</th>";
                # echo "<th>Pincode</th>";
                // echo "<th>Password</th>";
                echo "</tr>";
                
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    // echo "<pre>";
                    echo "<td>". $row['Name'] ."</td>";
                    echo "<td>" . $row['Transaction_Id'] . "</td>";
                    echo "<td>" .$row['Amount']."</td>";
                    echo "<td>" .$row['Date']."</td>";
                    #echo "<td>" .$row['pincode']."</td>";
                    // echo "<td>" . $row['password'] . "</td>";
                    // echo"</pre>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            else
            echo"please enter a valid id";
            echo"<hr>";
        echo"<br><br><br><br>";
    }
    }
    $sql="use project";
    if(mysqli_query($link,$sql)){
    $sql = "SELECT Institutions.Name,Funds.Transaction_Id,Funds.Amount,Inst_fund.Date FROM inst_fund,institutions,funds where inst_fund.name=institutions.name and inst_fund.transaction_id=funds.transaction_id ";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>Institute Name</th>";
            echo "<th>Transaction Id</th>";
            echo "<th>Amount</th>";
            echo "<th>Date</th>";
            # echo "<th>Pincode</th>";
            // echo "<th>Password</th>";
            echo "</tr>";
            
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                // echo "<pre>";
                echo "<td>". $row['Name'] ."</td>";
                echo "<td>" . $row['Transaction_Id'] . "</td>";
                echo "<td>" .$row['Amount']."</td>";
                echo "<td>" .$row['Date']."</td>";
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
   /* session_destroy();
    $_SESSION['usernameD']=NULL;*/
    // Close connection
    mysqli_close($link);
    ?>



























