<h2>Sửa nội dung một Menu</h2>

<form action="?controller=menu&action=update" method="post">
    <table>

        <tr>
            <td>Tên menu</td>
            <td>Link menu</td>
        </tr>

        <?php

        if (isset($_GET['id'])) {
            $myView->ShowMenuByID($_GET['id']);
        }

        ?>

        <tr>
            <td></td>
            <td><input type="submit" value="Cập nhật"></td>
        </tr>
        <input type="hidden" name="menu_id" value="<?php echo $_GET['id']; ?>">
    </table>
</form>
