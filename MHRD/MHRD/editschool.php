<?php
    session_start();
    if(!empty($_SESSION['usernameM']))
    {}
    else
    die("PLAESE LOGIN");
include'test2.php';
$id = $_POST['schoolid'];
$sql="use project";
    if(mysqli_query($conn,$sql))
    {
$sql = "DELETE FROM schools where Id = '$id'";
if (mysqli_query($conn,$sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
    }
    else
    echo"!ERROR";
$conn->close();


?>
