<?php

include_once("ModelSimpleCalc.php");


class ViewSimpleCalc
{

    public $myModel;

    /**
     * ViewSimpleCalc constructor.
     */
    public function __construct($model)
    {
        $this->myModel = $model;
    }

    /**
     * ViewSimpleCalc ShowForm
    */
    public function show_form(){
        include "temp-input-form.php";
    }

    /** Show So1 */
    public function show_so1(){
        echo $this->myModel->getSo1();
    }

    /** Show So2 */
    public function show_so2(){
        echo $this->myModel->getSo2();
    }

    /** Show Phep tinh */
    public function show_phep_tinh(){
        echo $this->myModel->getPheptinh();
    }

    /** Show Ket qua */
    public function show_ket_qua(){
        echo $this->myModel->getKetqua();
    }

}