<?php
     include'test4.php';
    $sql="use Project";
    if(mysqli_query($link,$sql)){
        
        $sql = "select Name,username,designation,contact from ministers";
        if($result=mysqli_query($link,$sql))
        {
            $row=mysqli_fetch_assoc($result);
        }
        else
            echo "!ERROR";
    }
    else
    echo "!ERROR";
    $ext=".jpg";
    // Close connection
    mysqli_close($link);
    ?>
<!DOCTYPE
<html>
 <head>
  <title>List Of Ministers</title>
<style>
h1
{
position:absolute;
right:45%;
}
</style>
<h1> List Of Ministers</h1>
<hr style="position:absolute;top:10%;">
 </head>
 <body>
   <img src="<?php $pic=$row['Name'].$ext;echo $pic;?>" style="width:98px;height:95px;position:absolute;top:20%;right:70%;">
   <pre style="position:absolute;top:33%;right:70%;">Name: <?php $pic=$row['Name'];echo $pic;?></pre>
   <pre style="position:absolute;top:37%;right:65%;">Email: <?php $pic=$row['username'];echo $pic;?></pre>
   <pre style="position:absolute;top:41%;right:69%;">Designation: <?php $pic=$row['designation'];echo $pic;?></pre>
   <pre style="position:absolute;top:45%;right:69%;">Contact No.: <?php $pic=$row['contact'];echo $pic;?></pre>
         <img src="<?php $row=mysqli_fetch_assoc($result);$pic=$row['Name'].$ext;echo $pic;?>" style="width:98px;height:95px;position:absolute;top:20%;right:30%;">
        <pre style="position:absolute;top:33%;right:32%;"><?php $pic=$row['Name'];echo $pic;?></pre>
        <pre style="position:absolute;top:37%;right:28%;">Email: <?php $pic=$row['username'];echo $pic;?></pre>
        <pre style="position:absolute;top:41%;right:28%;">Designation: <?php $pic=$row['designation'];echo $pic;?></pre>
        <pre style="position:absolute;top:45%;right:25%;">Contact No.: <?php $pic=$row['contact'];echo $pic;?></pre>

<img src="<?php $row=mysqli_fetch_assoc($result);$pic=$row['Name'].$ext;echo $pic;?>" style="width:98px;height:90px;position:absolute;top:55%;right:50%;">
<pre style="position:absolute;top:67%;right:50%;">Name :<?php $pic=$row['Name'];echo $pic;?></pre>
<pre style="position:absolute;top:71%;right:48%;">Email: <?php $pic=$row['username'];echo $pic;?></pre>
<pre style="position:absolute;top:75%;right:46%;">Designation: <?php $pic=$row['designation'];echo $pic;?></pre>
<pre style="position:absolute;top:79%;right:47%;">Contact No.: <?php $pic=$row['contact'];echo $pic;?></pre>
        </body>
</html>
