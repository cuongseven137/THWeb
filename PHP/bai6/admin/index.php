<?php

    include_once (__DIR__. '/../core/Router.php');
    $admin_router = new Router();
    $curController = $admin_router->getController();
    $curAction = $admin_router->getAction();

    //echo $curController;
    //echo $curAction;


    // Start the session
    session_start();

    // Khi không tồn tại chưa đăng nhập Admin
    if (!isset($_SESSION['username']))
    {
        echo "Không phận sự miễn vào!";
        header("Location: http://localhost/vnskills.com/bai6/admin/login.php");
    } else {

        // Kiểm tra quyền trang Menu
        if ($curController == 'menu') {
            if ($_SESSION['policy'] != 'admin' && $_SESSION['policy'] != 'editor'){
                echo "Bạn không có quyền trong khu vực này ....";
                header("Location: http://localhost/vnskills.com/bai6/admin/");
            }
        }

        // Kiểm tra quyền trang User
        if ($curController == 'user') {
            if ($_SESSION['policy'] != 'admin'){
                echo "Bạn không có quyền trong khu vực này ....";
                header("Location: http://localhost/vnskills.com/bai6/admin/");
            }
        }

    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Administrator Vnskills - Backend</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <div class="container" style="width: 1000px;margin: auto">
        <h1> Dashboard  </h1>
        <h3>Xin chào <?php echo $_SESSION['username'];?> <a href="login.php?action=logout"> Thoát tài khoản </a></h3>
        <table border="1">
            <tr>
                <td width="30%">Danh sách Menu</td>
                <td width="30%">Danh sách User</td>
                <td width="30%">Danh sách News</td>
            </tr>
            <tr>
                <td width="30%"><a href="?controller=menu">List Menu</a></td>
                <td width="30%"><a href="?controller=user">List User</a></td>
                <td width="30%"><a href="?controller=news">List News</a></td>
            </tr>
        </table>

        <?php

        // Xử lý Controller
        switch ($curController) {
            case 'menu':
                include_once (__DIR__. '/../controller/Menu_Controller.php');
                include_once (__DIR__. '/../view/Menu_View.php');
                $myController = new Menu_Controller();
                $myView = new Menu_View($myController);
                break;

            case 'user':
                include_once (__DIR__. '/../controller/User_Controller.php');
                $myController = new User_Controller();
                break;
            default:
                break;
        }

        // Xử lý Action
        if ($curController != null) {
            switch ($curAction) {
                case 'add':
                    include_once(__DIR__ . '/template/' . $curController . '/' . $curController . '_add.php');
                    break;
                case 'insert':
                    include_once(__DIR__ . '/template/' . $curController . '/' . $curController . '_insert.php');
                    break;
                case 'edit':
                    include_once(__DIR__ . '/template/' . $curController . '/' . $curController . '_edit.php');
                    break;
                case 'update':
                    include_once(__DIR__ . '/template/' . $curController . '/' . $curController . '_update.php');
                    break;
                case 'delete':
                    include_once(__DIR__ . '/template/' . $curController . '/' . $curController . '_delete.php');
                    break;
                default:
                    include_once(__DIR__ . '/template/' . $curController . '/' . $curController . '_list.php');
                    break;
            }
        }

        ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="myscript.js"></script>
</body>
</html>
