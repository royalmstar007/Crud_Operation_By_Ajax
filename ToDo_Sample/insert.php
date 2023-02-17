<?php
  $LIST=$_GET['list'];
    include "config.php";
    mysqli_query($conn,"insert into todo(list) values('$LIST')");
    header("location:index.php");
?>