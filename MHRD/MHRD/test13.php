<!DOCTYPE HTML>
<html>
<head>
<style>
body {
    background-color: #FFCC66;
    // background-image: url("butterfly.gif");
}
table
{
    //border:solid black;
width:60%;
}
</style>
<title>Sign Up</title>
</head>
<body>
<h1>Create a New Account</h1>
<form method="POST" action="test13.php">
<table>
<tr>
<td>Name :</td> <td><input type="text" name="name"></td><br>
</tr>
<tr>
<td>Email :</td> <td><input type="email" name="email"></td><br>
</tr>
<tr>
<td>Password :</td> <td><input type="password" maxlength="10" name="pwd"> </td><br>
</tr>
<tr>
<td>Designation :</td> <td><input type="text" name="desi"></td><br>
</tr>
<tr>
<td>Working Period(in years) :</td> <td><input type="text" name="wp" maxlength="2"></td><br>
</tr>
<tr>
<td>Contact No. :</td> <td><input type="text" maxlength="15" name="cn"></td><br>
</tr>
<tr>
<td><input type="submit" value="Submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>


<?php
   include'test2.php';
    echo"<br>";
    if(isset($_POST['submit']))
    {
    $sql="use Project";
    if(!mysqli_query($conn,$sql))
    die("!ERROR");
   else
    {
        if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['pwd'])||empty($_POST['desi'])||empty($_POST['wp'])||empty($_POST['cn']))
        {
            
            //header"location:test13.cpp";
            die("<h4>Please completely fill the form</h4>");
        }
        else
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pwd=$_POST['pwd'];
            $desi=$_POST['desi'];
            $cn=$_POST['cn'];
            $wp=$_POST['wp'];
            if($wp<'0'||$wp>'9')
                die("<h4>Enter a valid working period</h4>");
            $length=strlen($email);
            for($i=0;$i<$length;$i++)
            {
                if($email[$i]>='.'&&$email[$i]<='Z')
                {}
                else if($email[$i]>='a'&&$email[$i]<='z')
                   {}
                else
                    die("Please enter a valid username");
                
            }
                        if($i==$length)
            {
                    $length=strlen($pwd);
                    if($length<8)
                        die("Please enter a password of length more equal to 8");
                    else
                    {
                        $pwd=md5($pwd);
                        $sql="select username,Name from Ministers where username='$email' and contact='$cn'";
                        if($result=mysqli_query($conn,$sql))
                        {
                            if(mysqli_num_rows($result)>0)
                                die("Already Registered");
                            else
                            {
                                $sql="insert into Ministers value('$name','$email','$pwd','$wp','$cn','$desi')";
                                if(mysqli_query($conn,$sql))
                                {
                                    echo "<h2>Successfully Registered</h2>";
                                }
                                else
                                    die("!ERROR");
                            }
                        }
                        else
                            die("!ERROR");
                    }
                }
            }
            
        }
    }
    ?>


