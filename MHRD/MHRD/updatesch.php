<html>
<body>
<form action = "updatesch.php" method="POST">
Enter the name of the scholarship<br>
<input type="text" name="sch"><br>
Enter the new starting date<br>
<input type ="date" name = "sdate" ><br>
Enter the new last date<br>
<input type ="date" name = "ldate" ><br>
<input type = "submit" value = "submit">
</form>


</body>
</html><?php
    include'test2.php';
    $sql="use project";
    mysqli_query($conn,$sql);
    if(!empty($_POST['sch'])&&!empty($_POST['sdate'])&&!empty($_POST['ldate']))
    {
        $sch=$_POST['sch'];
        $sdate=$_POST['sdate'];
        $ldate=$_POST['ldate'];
        $sql="update Scholarships set `Starting date`='$sdate' and `Last date`='$ldate' where Name='$sch'";
        if(mysqli_query($conn,$sql))
           {
           echo"<br>Successfully updated";
           }
        else
           echo"!ERROR";
    }
    ?>
