<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "boodschappen");
$sql  = "DELETE FROM product WHERE idproduct='$_GET[idproduct]'";
if (mysqli_query($con,$sql))
    header("refresh:1; url=opdr8.php");
else
    echo "Not deleted";
?>


