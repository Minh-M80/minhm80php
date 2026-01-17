<?php
$host = 'localhost';
$port = '3309'; // Khai báo port của bạn ở đây
$dbname = 'buoi2_php';
$username = 'root';
$password = ''; 

try {
    // Thêm port= vào chuỗi DSN (Database Source Name)
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    
    $conn = new PDO($dsn, $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "KẾT NỐI DATABASE THÀNH CÔNG";
    // echo "Kết nối thành công qua port $port!"; 
} catch (PDOException $e) {
    error_log($e->getMessage());
    die("<h3>Hệ thống đang bảo trì, vui lòng quay lại sau.</h3>");
}
?>