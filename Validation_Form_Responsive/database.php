<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $compass = $_POST['compass'];
    $mobile = $_POST['mobile'];
    $email=$_POST['email'];

    $conn = new mysqli('localhost','root','','crud');
    if($conn->connect_error)
    {
        die('connection failed:' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into employee(username,password,compassword,mobile,email) values(?,?,?,?,?)");
        $stmt->bind_param("sssis",$user,$pass,$compass,$mobile,$email);
        $stmt->execute();
        header('location:demo.html');
        $stmt->close();
        $conn->close();
    }
?>