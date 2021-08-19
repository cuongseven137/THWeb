<h2>Danh sách các mục Menu</h2>
<h3><a href="?controller=menu&action=add">Thêm một mục Menu</a></h3>
<table width="100%" border="2">
    <tr>
        <th>ID</th>
        <th>Text</th>
        <th>Link</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>

    <?php
        $myView->ShowTableItem();
    ?>

</table>