<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
</head>
<body>
    <h2>Thêm sinh viên</h2>

    <form method="post">
        <input type="text" name="fullname" placeholder="Họ tên" required><br><br>
        <input type="text" name="student_code" placeholder="Mã SV" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <button type="submit" name="submit">Thêm mới</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // 1. Nhúng file kết nối DB
        require "db_connect.php";

        // 2. Lấy dữ liệu từ POST
        $fullname = $_POST['fullname'];
        $student_code = $_POST['student_code'];
        $email = $_POST['email'];

        // 3. Prepared Statement (KHÔNG NỐI CHUỖI)
        $sql = "INSERT INTO students (fullname, student_code, email)
                VALUES (:fullname, :student_code, :email)";

        $stmt = $conn->prepare($sql);

        // 4. Execute
        $stmt->execute([
            ':fullname' => $fullname,
            ':student_code' => $student_code,
            ':email' => $email
        ]);

        // 5. Thông báo
        echo "<p style='color:green'>Thêm sinh viên thành công!</p>";
    }
    ?>
</body>
</html>
