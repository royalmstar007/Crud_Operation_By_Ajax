<?php
include "config.php";
echo $id=$_GET['ID'];
mysqli_query($conn,"delete from todo where id=$id");
header("location:index.php");

?>