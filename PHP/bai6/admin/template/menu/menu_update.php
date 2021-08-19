<h2>Đã cập nhật thành công Menu</h2>

<?php

    echo $_POST['menu_link'];

    if (isset($_POST['menu_id'])) {
        $myController->getModel()->updateMenuByID($_POST['menu_text'],$_POST['menu_link'],$_POST['menu_id']);
        header('location: http://localhost/vnskills.com/bai6/admin/?controller=menu');
    }

?>