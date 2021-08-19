<?php


class ModelSimpleCalc
{

    private $so1 = 1;
    private $so2 = 1;
    private $pheptinh = '-';
    private $ketqua = 0;

    /**
     * ModelSimpleCalc constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getSo1()
    {
        return $this->so1;
    }

    /**
     * @param mixed $so1
     */
    public function setSo1($so1)
    {
        $this->so1 = $so1;
    }

    /**
     * @return mixed
     */
    public function getSo2()
    {
        return $this->so2;
    }

    /**
     * @param mixed $so2
     */
    public function setSo2($so2)
    {
        $this->so2 = $so2;
    }

    /**
     * @return mixed
     */
    public function getKetqua()
    {
        return $this->ketqua;
    }

    /**
     * @param mixed $ketqua
     */
    public function setKetqua($ketqua)
    {
        $this->ketqua = $ketqua;
    }

    /**
     * @return mixed
     */
    public function getPheptinh()
    {
        return $this->pheptinh;
    }

    /**
     * @param mixed $pheptinh
     */
    public function setPheptinh($pheptinh)
    {
        $this->pheptinh = $pheptinh;
    }



}