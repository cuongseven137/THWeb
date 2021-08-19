<?php

class ControllerCalc
{
    public $model;

    /**
     * ControllerCalc constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * $name of input from view
     * @param $name1
     */
    public function getInput1($name1)
    {
        if (isset($_GET[$name1])) {
            $this->model->setNumber1($_GET[$name1]);
        } else {
            $this->model->setNumber1(1);
        }

        return isset($_GET[$name1]);
    }

    /**
     * $name of input from view
     * @param $name2
     */
    public function getInput2($name2)
    {
        if (isset($_GET[$name2])) {
            $this->model->setNumber2($_GET[$name2]);
        } else {
            $this->model->setNumber2(1);
        }

        return isset($_GET[$name2]);
    }

    /**
     * $name of input from view
     * @param $operator
     */
    public function getOperator($operator)
    {
        if (isset($_GET[$operator])) {
            $this->model->setOperator($_GET[$operator]);
        } else {
            $this->model->setOperator('+');
        }

    }

    /**
     * TODO: Calculator
     */
    public function calculator()
    {
        $result = 0;
        $number1 = $this->model->getNumber1();
        $number2 = $this->model->getNumber2();
        $operator = $this->model->getOperator();

        if ($operator == '+') {
            $result = $number1 + $number2;
        }

        if ($operator == '-') {
            $result = $number1 - $number2;
        }

        if ($operator == '*') {
            $result = $number1 * $number2;
        }

        if ($operator == '/') {
            $result = $number1 / $number2;
        }

        $this->model->setResult($result);

        return $result;
    }

}