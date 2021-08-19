<?php

// Đọc tham số URL và điều hướng
class Router
{
    /**
     * Router constructor.
     */
    public function __construct()
    {
        //echo 'Router đã được tạo';
    }

    /**
     * Kiểm tra Controller trên URL
    */
    public function getController(){

        if (isset($_GET['controller'])) {
            $controller_name = $_GET['controller'];
        }else{
            $controller_name = '';
        }

        return $controller_name;
    }

    /**
     * Kiểm tra Action trên URL
     */
    public function getAction(){

        if (isset($_GET['action'])) {
            $action_name = $_GET['action'];
        }else{
            $action_name = '';
        }

        return $action_name;
    }


}