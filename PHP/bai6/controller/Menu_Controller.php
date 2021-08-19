<?php

// Class xử lý điều khiển của Menu
class Menu_Controller
{
    private $model;

    /**
     * Menu_Controller constructor.
     */
    public function __construct()
    {
        include_once (__DIR__ . '/../model/Menu_Model.php');
        $this->model = new Menu_Model();

    }

    /**
     * @return Menu_Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param Menu_Model $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Hành động xóa một nội dung
     */
    public function deleteByID($idInput) {
        if(isset($_GET[$idInput])){
            $this->model->deleteMenuByID($_GET[$idInput]);
            header('location:http://localhost/vnskills.com/bai6/admin/?controller=menu');
        }else{
            echo 'Không thấy Mục Menu này';
        }
    }

}