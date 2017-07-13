<?php
    session_start();
    
    if(!empty($_SESSION['usernameM']))
    {}
    else
    die("PLAESE LOGIN");

    ?>

<html>
<head>
<title>M Page</title>
<meta charset = "UTF-8"/>
<style>
p{
background-color:#008CBA;
color:white;
padding:15px;
font-size:30px;}
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

<h1> WELCOME </h1>

<a href="deleteschool.php" class="links"><p>View Schools List</p></a>
<a href="editgrievances.php" class="links"><p>View Grievances </p></a>
<a href="funds.php" class="links"><p>Funds for institution </p></a>
<a href="scholarahipndscheme.php" class="links"><p>View Schemes and Scholarships</p></a>
<a href="schemeW.php" class="links"><p>Add new Scheme </p></a>
<a href="viewschoolapplications.php" class="links"> <p>View Applications to setup new schools</p></a>
<a href="viewfundapplications.php" class="links"><p>View applications for funds</p> </a>
<a href="newscholarship.php" class="links"><p>Add new Scholarships</p> </a>
<a href="setupinst.php" class="links"><p>Setup a new Institute</p> </a>
<a href="updateschlarship.php" class="links"><p>Update scholarship Details</p> </a>
<a href="viewschoolfund.php" class="links"><p>Funds for school </p></a>



<form action = "logout.php" method="POST">
<input type = "submit" value ="Logout" name="logout">
</form>

</body>
</html>
