<?php


class ControllerMenu
{
    private $model;

    /**
     * ControllerMenu constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * $name of input from view
     * @param $text + $link
     */
    public function getInputs($text, $link)
    {
        $menuItem = array();
        $menuItem[0] = 'New Item';
        $menuItem[1] = '#';

        // Đọc Text và Link từ form vào
        if (isset($_GET[$text])) {
            $menuItem[0] = $_GET[$text];
        }

        if (isset($_GET[$link])) {
            $menuItem[1] = $_GET[$link];
        }

        // Đẩy vào cuối cùng MainMenu
        $this->model->addMenuItem($menuItem);

    }

}