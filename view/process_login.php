<?php
// Kiểm tra xem form đã được submit hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Thực hiện kiểm tra tên đăng nhập và mật khẩu
    if ($username == "admin" && $password == "password") {
        // Đăng nhập thành công
        echo "Đăng nhập thành công!";
        // Thực hiện các hành động khác sau khi đăng nhập thành công
    } else {
        // Đăng nhập thất bại
        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>