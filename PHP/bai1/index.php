<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

        // Đọc trên URL - đường GET
        $tieude = $_GET['h'];
        $nd = $_GET['t'];


        // Hàm viết tiêu đề
        function viet_tieu_de($noidung, $so) {
            echo sprintf('<h%d>%s%d</h%d>',$so,$noidung,$so,$so);

            return $so;
        }

        var_dump(viet_tieu_de($nd,$tieude));


        // Khai báo biến
        $noidung = "Đây là tiêu đề H";
        $heading = 2;

        var_dump($noidung);

        // Lệnh hiển thị
        echo sprintf("<h%d> %s%d </h%d>", $heading, $noidung, $heading, $heading);

        // Lặp đi lặp lại
        for ($i=1;$i<=6;$i++) {
            echo sprintf("<h%d> Đây là Heading%d </h%d>", $i, $i, $i);
        }

        echo "<h2>Đây là tiêu đề chẵn</h2>";
        for ($i=1;$i<=6;$i++) {
            if ($i % 2 == 0) {
                echo sprintf("<h%d> Đây là Heading%d </h%d>", $i, $i, $i);
            }
        }




    ?>

</body>
</html>


