<?php
// ✅ LOCALHOST CONFIGURATION (For development)
// $host = "localhost";
// $user = "root";
// $password = "";
// $database = "mobile_shop";

// 🌐 LIVE SERVER CONFIGURATION (InfinityFree Hosting)

$host = "sql108.infinityfree.com";
$user = "if0_42713306";
$password = "Voraparth007";
$database = "if0_42713306_mobile_shop";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

