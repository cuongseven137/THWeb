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
    public function getInputs($text, $link, $action)    {

        $new_text = 'New Item';
        $new_link = '#';

        // Đọc hành động từ Form
        if (isset($_POST[$action])) {

            // Thêm vào bảng Menu
            if ($_POST[$action] == 'insert') {

                // Đọc Text và Link từ form vào
                if (isset($_POST[$text])) {
                    $new_text = $_POST[$text];
                }

                if (isset($_POST[$link])) {
                    $new_link = $_POST[$link];
                }

                // Đẩy vào MainMenu
                $this->model->addMenuItem($new_text,$new_link);
            }

        }

    }

}