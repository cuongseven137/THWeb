<?php
    include_once("ModelSimpleCalc.php");
    include_once("ViewSimpleCalc.php");
    include_once("ControllerSimpleCalc.php");
    $myModel = new ModelSimpleCalc();
    $myView = new ViewSimpleCalc($myModel);
    $myController = new ControllerSimpleCalc($myModel);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<?php
    $myView->show_form();

    $myController->getInputSo1();
    $myController->getInputSo2();
    $myController->getInputPhepTinh();
    $myController->calcResult();
?>

<p>Testing Model: Số 1 = <?php $myView->show_so1(); ?> </p>
<p>Số 2 = <?php $myView->show_so2(); ?></p>
<p>Phép tính = <?php $myView->show_phep_tinh(); ?></p>
<p>Kết quả = <?php $myView->show_ket_qua(); ?></p>


</body>
</html>