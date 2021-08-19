<?php

// Lưu trữ nội dung của các mục Menu
class ModelMenu
{
    private $menu_items;
    private $sql = "SELECT * FROM `menu` WHERE 1";
    public $currentDB;

    /**
     * ModelMenu constructor.
     * @param string[][] $menu_items
     */
    public function __construct($mydb)
    {
        // Truy vấn các mục menu cho vào Menu_items
        $this->menu_items = $mydb->conn->query($this->sql);

        // tham chiếu
        $this->currentDB = $mydb;
    }

    /**
     * ModelMenu truy ván lại
     */
    public function getList($mydb){
        // Truy vấn các mục menu cho vào Menu_items
        $this->menu_items = $mydb->conn->query($this->sql);

        // tham chiếu
        $this->currentDB = $mydb;
    }

    /**
     * ModelMenu truy ván theo ID
     */
    public function getByID($mydb, $id){

        $sqlID = sprintf("SELECT * FROM `menu` WHERE `menu_id`= %d",$id);

        // Truy vấn mục menu theo ID
        $this->menu_items = $mydb->conn->query($sqlID);

        // tham chiếu
        $this->currentDB = $mydb;
    }

    /**
     * @return string[][]
     */
    public function getMenuItems()
    {
        return $this->menu_items;
    }

    /**
     * @param $new_item = array("Text","Link")
     */
    public function addMenuItem($text,$link)
    {
        $insert_sql = sprintf("INSERT INTO `menu` (`menu_text`, `menu_link`) 
                                      VALUES ('%s', '%s')",$text,$link);

        if ($this->currentDB->conn->query($insert_sql) === TRUE) {
            $this->returnHome();
        } else {
            echo "Error: " . $insert_sql . "<br>" . $this->currentDB->error;
        }
    }

    public function returnHome(){
        header("Location: http://localhost/vnskills.com/bai5/");
    }




}