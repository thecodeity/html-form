<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message= $_POST['message'];

//Database connection
$conn = new mysqli('localhost','root','','data');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into test(name,email,message)
    values(?,?,?)");
    $stmt->bind_param($name, $email, $message);
    $stmt->execute();
    echo "test successfully...";
    $stmt->close();
    $conn->close();
}

?>