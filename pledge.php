<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Electrove Pledge</title>
<link href="css/main.css" rel="stylesheet">
</head>

<body>
<div style="text-align:center">
<h3 style="color:white"><?php
$id = $_GET['id'];

$host_name  = "db585826593.db.1and1.com";
$database   = "db585826593";
$user_name  = "dbo585826593";
$password   = "Electrove14";

$connect = mysqli_connect($host_name, $user_name, $password, $database);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "UPDATE PreOrders SET pledge='true' WHERE id=" . $id;

if ($connect->query($sql) === TRUE) {
    echo "Thank you very much. <br /> We will contact you when pre-orders open.";
} else {
    echo $conn->error;
}

$connect->close();

?></h3>
</body>
</html>