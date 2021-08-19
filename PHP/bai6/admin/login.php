<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập quản trị hệ thống</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
    session_start(); // Khởi động phiên

    include_once (__DIR__. '/../controller/User_Controller.php');
    $myUser = new User_Controller();


    // Đã đăng nhập mới được vào
    if (isset($_SESSION['username'])){
        header('location:http://localhost/vnskills.com/bai6/admin/');
    }

    // Nếu logout thì unset
    if ( isset($_GET['action'])  && ($_GET['action'] == 'logout')) {
        session_unset(); // xóa session

        // Xóa cookie
        setcookie('username', null, -1, '/');
        setcookie('password', null, -1, '/');

        unset($_COOKIE['password']);
        unset($_COOKIE['username']);

        header('location:http://localhost/vnskills.com/bai6/admin/login.php');
    }

    // Kiểm tra thông tin từ Cookie
    $cookie_uname = "username";
    $cookie_pass_name = "password";

    if (isset($_COOKIE[$cookie_uname]) && isset($_COOKIE[$cookie_pass_name])) {

        // Kiểm tra nếu đúng thì đăng nhập luôn không cần form login
        if ($myUser->checkCookieUsername('username')){

            // Kiểm tra Password
            if ($myUser->checkCookiePassword('password')){
                $_SESSION['username'] = $_COOKIE['username'];
                $_SESSION['password'] = $_COOKIE['password'];

                header('location:http://localhost/vnskills.com/bai6/admin/');
            }
        }
    }

    // Kiểm tra thông tin đăng nhập từ Form Login
    if ($myUser->checkUsername('username')){

        // Kiểm tra Password
        if ($myUser->checkPassword('password')){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];


            // Kiểm tra đánh dấu chế độ lưu password
            if (isset($_POST['savepass'])) {

                // Lưu thông tin vào cookie
                $cookie_uname = 'username';
                $cookie_uname_value = $_SESSION['username'];
                $cookie_pass_name = 'password';
                $cookie_pass_value = $_SESSION['password'];

                setcookie($cookie_uname, $cookie_uname_value, time() + (86400 * 30), "/");
                setcookie($cookie_pass_name, $cookie_pass_value, time() + (86400 * 30), "/");
            }

            header('location:http://localhost/vnskills.com/bai6/admin/');
        }
    }

?>

    <div class="container" style="width: 800px; margin: auto">
        <h2>Login Admin</h2>
        <form action="login.php?action=check" method="post">
            <table border="1">
                <tr>
                    <td>Tên đăng nhập: </td>
                    <td><input type="text" name="username" placeholder="Nhập tên đăng nhập"></td>
                </tr>
                <tr>
                    <td>Nhập mật khẩu: </td>
                    <td><input type="password" name="password" placeholder="Nhập mật khẩu"></td>
                </tr>
                <tr>
                    <td><input type="checkbox" value="1" name="savepass">Lưu mật khẩu</td>
                    <td><input type="submit" value="Đăng nhập"></td>
                </tr>
                <tr>
                    <td>Thông báo: </td>
                    <td>Vui lòng nhập thông tin rồi nhấn nút [Đăng nhập]</td>
                </tr>

            </table>
        </form>

    </div>


</body>
</html>
