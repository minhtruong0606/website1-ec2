<?php
// Database connection for web2 - Sử dụng database có sẵn của bạn
$database_name = "web2_database"; // Tên database bạn đã tạo
$username = "tmdt_user";    // Username bạn đã tạo
$password = "Nt25102004@";    // Password bạn đã set
$host = "54.255.146.95";            // Hoặc IP database server

$con = mysqli_connect($host, $username, $password, $database_name);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Set charset
mysqli_set_charset($con, "utf8");
?>
