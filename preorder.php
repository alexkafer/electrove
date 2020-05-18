<?php
$name = $_POST['name'];
$email = $_POST['email'];
$refer = $_POST['refer'];
$comment = $_POST['comment'];
$pledge = $_POST['pledge'];

$host_name  = "db585826593.db.1and1.com";
$database   = "db585826593";
$user_name  = "dbo585826593";
$password   = "Electrove14";

$connect = mysqli_connect($host_name, $user_name, $password, $database);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "INSERT INTO PreOrders (id, name, email, refer, comment, pledge) VALUES (NULL, '".$name."', '".$email."', '".$refer."', '".$comment."', '".$pledge."')";

if ($connect->query($sql) === TRUE) {
    echo "success";
} else {
    echo $conn->error;
}

$connect->close();

?>