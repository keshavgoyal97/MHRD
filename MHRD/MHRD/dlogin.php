<?php
    session_start();
    if(!empty($_SESSION['usernameD']))
    {}
    else
    die("PLEASE LOGIN");
    ?>



<!doctype html>
<html>
<head>
<title>D page</title>
<meta charset = "UTF-8"/>
<style>
p{
background-color:#008CBA;
color:white;
padding:15px;
font-size:30px;
font-family: Copperplate / Copperplate Gothic Light, sans-serif;}
h1{
background-color:#FF851B;
padding:15px;
color:white;
text-align:center;
text-size:30px;}
input[type=submit] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration:none;
     font-size:25px;
    margin: 4px 2px;
    cursor: pointer;}
</style>

</head>
<body>

<h1 > WELCOME </h1>

<a href="lstofschool.php"><p>View Schools List</p></a>
<a href="grivances.php" ><p>View Grievances</p></a>
<a href="grivancesW.php" ><p>Write a grievance</p></a>
<a href="appplyforfunds.html"><p>Apply for funds</p></a>

<form action ="logout.php" method="POST">
<input type ="submit" value="logout" name="logout">
</form>

</body>
</html>.
