
<?php
    session_start();
    if(!empty($_SESSION['usernameM']))
    {}
    else
    die("PLEASE LOGIN");
include'test2.php';
include 'lstofschool.php';
?>

<html>

<body>
<form action="editschool.php" method="POST">
<p>Enter the Id of the School to delete</p>
<input type = "number" name="schoolid">
<input type= "submit" value = "submit">


</form>
</body>
</html>
