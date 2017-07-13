<?php
    include'test2.php';
    $sql="use project";
    if(mysqli_query($conn,$sql))
    {
        if(!empty($_POST['r_id']))
            $r_id=$_POST['r_id'];
        else
            die("Please enter a id");
        $sql="select schoolname,pincode,state,area,board from schooldetails where r_id='$r_id'";
        if($result=mysqli_query($conn,$sql))
        {
            $row=mysqli_fetch_array($result);
            $sn=$row['schoolname'];$b=$row['board'];$a=$row['area'];$s=$row['state'];$p=$row['pincode'];
            $sql="insert into schools values('$r_id','$sn','$b')";
            if(mysqli_query($conn,$sql))
            {
              $sql="insert into Land_alloc values('$r_id','$a','$s','$p')";
                if(mysqli_query($conn,$sql))
                {
                    $sql="delete from schooldetails where r_id='$r_id'";
                    if(mysqli_query($conn,$sql))
                  echo"<p>Records Approved successfully</p>";
                }
                else
                    echo"!ERROR";
            }
            else
                echo"!ERROR";
        }
        else
            echo"!ERROR";
    }
else
    echo"!ERROR";
?>
