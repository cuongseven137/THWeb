<?php


class ViewCalc
{
    public $model;
    public $controller;

    /**
     * ViewCalc constructor.
     * @param $model
     * @param $controller
     */
    public function __construct($model, $controller)
    {
        $this->model = $model;
        $this->controller = $controller;
    }

    public function showForm(){
        include ('TempForm.php');
        $this->controller->getInput1('number1');
        $this->controller->getInput2('number2');
        $this->controller->getOperator('operator');
    }

    public function showResult(){
        include ('TempResult.php');
        $this->controller->calculator();
        echo sprintf('<p>Number 1 is <strong>%d</strong></p>',$this->model->getNumber1());
        echo sprintf('<p>Number 2 is <strong>%d</strong></p>',$this->model->getNumber2());
        echo sprintf('<p>Operator is <strong>%s</strong></p>',$this->model->getOperator());
        echo sprintf('<p>Result is <strong>%d</strong></p>',$this->model->getResult());
    }


}