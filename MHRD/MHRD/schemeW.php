
<!DOCTYPE html>
<html>
<head>
<h1>New Schemes</h1>

<title>New Schemes</title>
</head>
<body>
<form action="schemeW.php" method="POST">
 <table>
  <tr>
   <td>Name: </td><td><input type="text" name="n"></td>
  </tr>
  <tr>
<td>School Id : </td>
   <td><input type="text" name="si"></td>
  </tr>
  <tr>
   <td>Type :</td>
   <td><textarea name="t" cols="30" rows="4"></textarea></td>
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
    if(isset($_POST['submit']))
    {
        $n=$_POST['n'];
        $si=$_POST['si'];
        $t=$_POST['t'];
        if(!empty($n)&&!empty($si)&&!empty($t))
        {
            $sql="use project";
            if(mysqli_query($conn,$sql))
            {
                $sql="insert into schemes value('$n','$si','$t')";
                 if(mysqli_query($conn,$sql))
                 {
                     echo "Insertion Complete";
                 }
                   else
                       echo "!ERROR";
            }
            else
                echo "!ERROR";
        }
          else
              echo "!ERROR";
    }
    ?>
























