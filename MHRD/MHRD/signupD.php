<!DOCTYPE HTML>
<html>
<head>
<style>
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
<form method="POST" action="signupD.php">
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
<td>Institute Name :</td> <td><input type="text" name="inst"></td><br>
</tr>
<tr>
<td>Reseach Area :</td> <td><input type="text"  name="ra"></td><br>
</tr>
<tr>
<td>Contact No. :</td> <td><input type="text" maxlength="10" name="cn"></td><br>
</tr>
<tr>
<td><input type="submit" value="Submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>


<?php
    session_start();
   include'test2.php';
    echo"<br>";
    if(isset($_POST['submit']))
    {
    $sql="use Project";
    if(!mysqli_query($conn,$sql))
    die("!ERROR");
   else
    {
        if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['pwd'])||empty($_POST['inst'])||empty($_POST['cn']))
        {
            
            //header"location:test13.cpp";
            die("<h4>Please completely fill the form</h4>");
        }
        else
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pwd=$_POST['pwd'];
            $inst=$_POST['inst'];
            $cn=$_POST['cn'];
            $ra=$_POST['ra'];
            # $wp=$_POST['wp'];
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
                        $sql="select username,Name from Dean where Institute_Name='$inst' and contact='$cn'";
                        if($result=mysqli_query($conn,$sql))
                        {
                            if(mysqli_num_rows($result)>0)
                                die("Already Registered");
                            else
                            {
                                $sql="insert into Dean value('$name','$inst','$email','$pwd','$cn','$ra')";
                                if(mysqli_query($conn,$sql))
                                {
                                    echo "<h2>Successfully Registered</h2>";
                                    $_SESSION['usernameD']=$email;
                                    header("location:dlogin.php");
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


