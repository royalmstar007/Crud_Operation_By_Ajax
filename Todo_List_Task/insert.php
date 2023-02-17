<?php
  // Include Connection
  include 'config.php';

  $txt = $_POST['txt'];

  $sql = "INSERT INTO demo (txt) VALUES ('$txt')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
