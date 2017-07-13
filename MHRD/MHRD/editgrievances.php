 <?php
    session_start();
    if(!empty($_SESSION['usernameM']))
    {}
    else
    die("PLAESE LOGIN");
include'grivances.php'
?>

<html>

<body>
<form action="editschool.php" method="POST">
<p>Enter the Id of the Grievance to delete</p>
<input type = "number" name="gid">
<input type= "submit" value = "submit">


</form>
</body>
</html>
