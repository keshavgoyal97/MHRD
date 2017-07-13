<?php
  $servername="localhost";
    $username="root";
    $password="30121014";
   $conn=mysqli_connect($servername,$username,$password);
    if($conn==false)
    die("not able to connect");
    else
    //include 'index.html';
    echo "connection established";
    ?>
