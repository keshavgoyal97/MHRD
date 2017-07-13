
<?php
    session_start();
    if(!empty($_SESSION['usernameM']))
    {}
    else
    die("PLAESE LOGIN");
    ?>
<!DOCTYPE html>
<html>
<head>
<h1>Delete Grivances</h1>
<title>Delete Grivances</title>
</head>
<body>

</form>

</body>
</html>

<?php
    
    
    include'test4.php';
    if(isset($_POST['submit'])
       {
         if(!empty($_POST['id']))
          $id=$_POST['id'];
         else
           echo "Please fill the Id";
       }
       else
       echo "!ERROR";
    $sql="use Project";
    if(mysqli_query($link,$sql)){
        
       $sql = "delete from `Grievances` where ID='$id'";
       if(mysqli_query($link,$sql))
       {
        echo "Update Successfull";
       }
       else
        echo "!ERROR";
        }
    else
    echo "!ERROR";
    
    // Close connection
    mysqli_close($link);
    ?>



























