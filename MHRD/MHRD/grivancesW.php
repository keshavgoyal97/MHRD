
<?php
    session_start();
    if(!empty($_SESSION['usernameD']))
    {}
    else
    die("PLAESE LOGIN");
    ?>
<!DOCTYPE html>
<html>
<head>
<h1>Write Grivances</h1>
<hr>
<title>Write Grivances</title>
</head>
<body>
<form action="grivancesW.php" method="POST">
 <table>
  <tr>
   <td>Institution Name: </td><td><input type="text" name="in"></td>
  </tr>
  <tr>
   <td>Complaint Type: </td>
   <td><input type="text" name="ct"></td>
  </tr>
  <tr>
   <td>Complaint :</td>
   <td><textarea name="c" cols="30" rows="4"></textarea></td>
  </tr>
  <tr>
   <td><input type="submit" name="submit"></td>
  </tr>
 </table>
</form>

</body>
</html>


<?php
   include'test2.php';
    $v=0;
    if(isset($_POST['submit']))
    {
        $in=$_POST['in'];
        $ct=$_POST['ct'];
        $c=$_POST['c'];
        if(!empty($in)&&!empty($ct)&&!empty($c))
        {
            $sql="use project";
            mysqli_query($conn,$sql);
            $sql="select * from Institutions where name='$in'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {$v=1;}
            $sql="select * from Schools where name='$in'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {$v=1;}
            if($v==1)
            {
                $n="NULL";
                $sql="insert into Grievances value('$n','$in','$ct','$c')";
                 if(mysqli_query($conn,$sql))
                 {
                     echo "Insertion Complete";
                 }
                   else
                       echo "!ERROR";
            }
            else
                echo "Enter a valid institute name";
        }
          else
              echo "completely fill the form";
    }
    ?>
























