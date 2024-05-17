<?php
$id = $_GET['id'];
$con = mysqli_connect("db","shivam","shivam","login");
$sql = "DELETE FROM `images` WHERE `id`='$id'";
$result = mysqli_query($con, $sql);
if($result)
{
    header("location: admin.php");
}

?>
