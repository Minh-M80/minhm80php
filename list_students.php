<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Danh sách sinh viên</h2>

    <?php
    // 1. Kết nối DB
    require "db_connect.php";

    // 2. SELECT
    $sql = "SELECT * FROM students";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // 3. fetchAll
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Mã SV</th>
            <th>Email</th>
            <th>Hành động</th>
        </tr>

        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['fullname'] ?></td>
                <td><?= $student['student_code'] ?></td>
                <td><?= $student['email'] ?></td>
                <td>
                    <a href="#">Sửa</a> |
                    <a href="#">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
