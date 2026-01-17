<?php
$host = 'localhost';
$port = '3309'; 
$dbname = 'buoi2_php';
$username = 'root';
$password = ''; 

try {
    
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    
    $conn = new PDO($dsn, $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "KẾT NỐI DATABASE THÀNH CÔNG";
    
} catch (PDOException $e) {
    error_log($e->getMessage());
    die("<h3>Hệ thống đang bảo trì, vui lòng quay lại sau.</h3>");
}
?>