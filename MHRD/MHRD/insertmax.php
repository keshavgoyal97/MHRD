<?php
include 'connect.php';
$max = $_POST['newmax'];
$Sname = $_POST['Sname'];
    $iname=$_POST['Iname'];
$sql = "UPDATE Inst_Sch SET `Max. Applicants`='$max' WHERE `Scholarship Name`= '$Sname' and `Institute Name`='$iname'";

if(mysqli_query($conn,$sql))
{ echo "executed successfully";}
else
{ echo "error";}

?>
