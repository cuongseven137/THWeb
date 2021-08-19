<?php

include_once("ModelSimpleCalc.php");


class ControllerSimpleCalc
{

    public $myModel;

    /**
     * ControllerSimpleCalc constructor.
     */
    public function __construct($model)
    {
        $this->myModel = $model;
    }

    /**
     * ControllerSimpleCalc get Input so1
     */
    public function getInputSo1(){
        if (isset($_GET["so1"])) {
            $this->myModel->setSo1($_GET["so1"]);
        }
    }

    /**
     * ControllerSimpleCalc get Input so2
     */
    public function getInputSo2(){
        if (isset($_GET["so2"])) {
            $this->myModel->setSo2($_GET["so2"]);
        }
    }

    /**
     * ControllerSimpleCalc get Select Operator
     */
    public function getInputPhepTinh(){
        if (isset($_GET["operator"])) {
            $this->myModel->setPheptinh($_GET["operator"]);
        }
    }

    /**
     * ControllerSimpleCalc tinh ket qua.
     */
    public function calcResult() {

        $kq = 0;

        if ($this->myModel->getPheptinh() == '+') {
            $kq = $this->myModel->getSo1() + $this->myModel->getSo2();
        }

        if ($this->myModel->getPheptinh() == '-') {
            $kq = $this->myModel->getSo1() - $this->myModel->getSo2();
        }

        if ($this->myModel->getPheptinh() == '*') {
            $kq = $this->myModel->getSo1() * $this->myModel->getSo2();
        }

        if ($this->myModel->getPheptinh() == '/') {
            $kq = $this->myModel->getSo1() / $this->myModel->getSo2();
        }

        // Cập nhật lại vào Model
        $this->myModel->setKetqua($kq);

    }


}