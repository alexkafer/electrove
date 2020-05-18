<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Electrove Pledge</title>
<link href="css/main.css" rel="stylesheet">
</head>

<body>
<div style="text-align:center">
<h3 style="color:white">We have <?php

$host_name  = "db585826593.db.1and1.com";
$database   = "db585826593";
$user_name  = "dbo585826593";
$password   = "Electrove14";

$connect = mysqli_connect($host_name, $user_name, $password, $database);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = $connect->query("SELECT COUNT(*) FROM PreOrders WHERE `pledge` = 'true'");
$row = $result->fetch_row();
echo $row[0];


$connect->close();

?> pledged orders</h3>
</body>
</html>