
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
<h1>Set Up New Institute</h1>
<hr>
<title>Set Up New Institute</title>
</head>
<body>
<form action="setupinst.php" method="POST">
 <table>
  <tr>
   <td>Name: </td><td><input type="text" name="in"></td>
  </tr>
  <tr>
   <td>Type: </td>
   <td><input type="text" name="ct"></td>
  </tr>
  <tr>
   <td>Ranking: </td>
   <td><input name="c" type="text" maxlength="2"></input></td>
  </tr>
<tr>
<td>State: </td>
<td><input name="st" type="text"></input></td>
</tr>
<tr>
<td>Area(in sq.yards): </td>
<td><input name="a" type="text" ></input></td>
</tr>
<tr>
<td>Pincode: </td>
<td><input name="p" type="text"></input></td>
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
        $st=$_POST['st'];
        $a=$_POST['a'];
        $p=$_POST['p'];
        if(!empty($in)&&!empty($ct)&&!empty($c)&&!empty($st)&&!empty($a)&&!empty($p))
        {
            $sql="use project";
            mysqli_query($conn,$sql);
            $sql="insert into institutions value('$in','$ct','$c')";
            if(mysqli_query($conn,$sql))
            {
                 $sql="insert into `Land allocation` value('$in','$a','$st','$p')";
                if(mysqli_query($conn,$sql))
                {
                    echo"Successfully Created";
                }
                else
                    echo"!ERROR";
            }
            else
                echo"!ERROR";
    }
        else
            echo"Completely fill the form";
    }
    ?>
























