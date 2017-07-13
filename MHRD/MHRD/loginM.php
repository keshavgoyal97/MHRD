<!DOCTYPE html>
<html>
<head>
<title>Login For Ministers</title>
<h1>Login For Ministers</h1>
</head>
<body>

<form Method="POST" action="loginM.php">

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
    header("location:test13.php");
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
       $sql="select username,password,Name from Ministers where username='$usr' and password='$pass'";
        if($result=mysqli_query($conn,$sql))
        {
            
            if(mysqli_num_rows($result)>0)
            {
                $row=mysqli_fetch_assoc($result);
                header("location:mlogin.php");
                $_SESSION['usernameM']=$usr;
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


