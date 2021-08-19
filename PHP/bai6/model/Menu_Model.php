<?php

// Class thực hiện các thao tác CSDL
class Menu_Model
{

    private $conn;

    /**
     * Menu_Model constructor.
     */
    public function __construct()
    {
        include_once (__DIR__ . '/../core/Connection.php');
        $db = new Connection();
        $this->conn = $db->getConnection();
    }

    /**
     * Lấy toàn bộ nội dung
    */
    public function getAllMenu(){
        $sql = "SELECT * FROM `menu`";
        $final = array();

        $result = $this->conn->query($sql);
        if ($result->num_rows > 0){
            while ($row=mysqli_fetch_assoc($result))
                array_push($final,$row);
            return $final;
        }

        return $final;
    }

    /* Lấy mục menu theo ID */
    public function getMenuByID($id){
        $sql = "SELECT * FROM `menu` WHERE `menu_id` = " . $id;
        $final = array();

        $result = $this->conn->query($sql);
        if ($result->num_rows > 0){
            $final = mysqli_fetch_assoc($result);
        }

        return $final;
    }

    /* Cập nhật mục menu theo ID */
    public function updateMenuByID($text,$link,$id){
        $sql = "UPDATE `menu` SET `menu_text`= '$text',`menu_link`='$link' WHERE `menu_id` = $id ";
        $result = $this->conn->query($sql);

        if($result)
            return $result;
        else
            return 'Lỗi cập nhật';
    }

    /* Xóa mục menu theo ID */
    public function deleteMenuByID($id){
        $sql = "DELETE FROM `menu` WHERE `menu_id` = $id ";

        $result = $this->conn->query($sql);

        if($result)
            return $result;
        else
            return 'Lỗi xóa';
    }

}