<?php

// Quản lý thao tác với User
class User_Controller
{

    private $model;

    /**
     * User_Controller constructor.
     * @param $model
     */
    public function __construct()
    {
        include_once (__DIR__ . '/../model/User_Model.php');
        $this->model = new User_Model();
    }


    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Get Post Username
     */
    public function checkUsername($inputUsername){

        $user_ok = false;

        if (isset($_GET['action']) && $_GET['action'] == 'check'){
            if (isset($_POST[$inputUsername])) {
                $checkResult = $this->model->checkUsernameDB($_POST[$inputUsername]);
                if ($checkResult){
                    $user_ok = true;
                    echo 'Ok có username trong CSDL';
                }else{
                    $user_ok = false;
                    echo 'Không có username trong CSDL';
                }
            }
        }

        return $user_ok;

    }

    /**
     * Get Cookie Username
     */
    public function checkCookieUsername($inputUsername){

        $user_ok = false;

        if (isset($_COOKIE[$inputUsername])) {
            $checkResult = $this->model->checkUsernameDB($_COOKIE[$inputUsername]);
            if ($checkResult){
                $user_ok = true;
                echo 'Ok có username trong CSDL';
            }else{
                $user_ok = false;
                echo 'Không có username trong CSDL';
            }
        }

        return $user_ok;

    }




    /**
     * Get Post Password
     */

    public function checkPassword($inputPassword){

        $pass_ok = false;

        if (isset($_GET['action']) && $_GET['action'] == 'check'){
            if (isset($_POST[$inputPassword])) {
                $checkResult = $this->model->checkPasswordDB($_POST[$inputPassword]);
                if ($checkResult){
                    $pass_ok = true;
                    echo 'Ok mật khẩu đúng';
                }else{
                    $pass_ok = false;
                    echo 'Mật khẩu sai';
                }
            }
        }

        return $pass_ok;

    }

    /**
     * Get Cookie Password
     */

    public function checkCookiePassword($inputPassword){

        $pass_ok = false;

        if (isset($_COOKIE[$inputPassword])) {
            $checkResult = $this->model->checkPasswordDB($_COOKIE[$inputPassword]);
            if ($checkResult){
                $pass_ok = true;
                echo 'Ok mật khẩu đúng';
            }else{
                $pass_ok = false;
                echo 'Mật khẩu sai';
            }
        }

        return $pass_ok;

    }
}