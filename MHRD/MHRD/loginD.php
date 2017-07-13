<!DOCTYPE html>
<html>
<head>
<title>Login For Dean</title>
<h1>Login For Dean</h1>
</head>
<body>

<form Method="POST" action="loginD.php">

<label for="username"> Username:</label><br>
<input type="text" name="usr" id="username"  >
<br>
<label for="password">Password:</label><br>
<input type="password" id="password" maxlength="10" name="pass"><br>
<input type="submit" value="Log In" name="submit">
<input type="submit" value="SignUp" name="signup">

</form>

</body>
</html>

<?php
    if(!empty($_POST['signup']))
    header("location:signupD.php");
    include 'test2.php';
    echo"<br>";
   // echo "<title>.php.<title>";
   if(isset($_POST['submit']))
    {
        
        session_start();
   // $name1="IIT INDORE";
    $sql="use Project";
   // mysqli_query($conn,$sql);

//$sql="update Institutions set Ranking=13 where Name='$name1'";
        #session_start();
 
  if(!mysqli_query($conn,$sql))
      die(mysqli_error($conn));
  else
        {
         //echo "<br>successfull";
            if(isset($_POST['usr'])&&isset($_POST['pass']))
            {
        $usr=$_POST['usr'];
        $pass=$_POST['pass'];
                $pass=md5($pass);
                //echo $pass"<br>";
       // $_POST['usr']=NULL;
            //echo $usr[1];
            $length=strlen($usr);
                for($i=0;$i<$length;$i++)
            {
                if($usr[$i]==' '||$usr[$i]=='"')
                {
                    die("Please don't use single_quote or double_quote or space in username");
                }
            }
if(!empty($usr)&&!empty($pass))
    {
       $sql="select username,password,Name from Dean where username='$usr' and password='$pass'";
        if($result=mysqli_query($conn,$sql))
        {
            
            if(mysqli_num_rows($result)>0)
            {
                $row=mysqli_fetch_assoc($result);
                //echo "Welcome  MR. ".$row['Name'];
                $_SESSION['usernameD']=$usr;
                //$_SESSION['pwd']=$pass;
                header("location:dlogin.php");
            }
            else
                exit("<h4>Please enter a valid username or password</h4>");
        }
        else
            exit("!ERROR");
        
    }
        else
            echo " Please Completely Fill The Form ";
            }
            else
                echo "!ERROR";
        }
    
    
    //LogIn($conn);
mysqli_close($conn);
    }
?>


