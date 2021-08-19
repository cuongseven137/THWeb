<?php


class ModelCalc
{
    private $number1;
    private $number2;
    private $operator;
    private $result;


    /**
     * @return mixed
     */
    public function getNumber1()
    {
        return $this->number1;
    }

    /**
     * @param mixed $number1
     */
    public function setNumber1($number1)
    {
        $this->number1 = $number1;
    }

    /**
     * @return mixed
     */
    public function getNumber2()
    {
        return $this->number2;
    }

    /**
     * @param mixed $number2
     */
    public function setNumber2($number2)
    {
        $this->number2 = $number2;
    }

    /**
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param mixed $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }



}