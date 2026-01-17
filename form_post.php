<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
</head>
<body>
    <h2>Form đăng ký (POST)</h2>

    <form method="post" action="">
        <input type="text" name="fullname" placeholder="Tên" required><br><br>
        <input type="password" name="password" placeholder="Mật khẩu" required><br><br>
        <button type="submit">Đăng ký</button>
    </form>

    <?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "<p>Đã nhận thông tin của <b>$name</b></p>";
    }
    ?>
</body>
</html>
