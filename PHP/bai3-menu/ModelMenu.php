<?php

// Lưu trữ nội dung của các mục Menu
class ModelMenu
{
    private $menu_items = array(
        array("Add New Item","http://localhost/vnskills.com/bai3-menu/addnew.php"),
        array("Tin tức","https://dantri.com.vn/")
    );

    /**
     * @return string[][]
     */
    public function getMenuItems()
    {
        return $this->menu_items;
    }

    /**
     * @param string[][] $menu_items
     */
    public function setMenuItems($menu_items)
    {
        $this->menu_items = $menu_items;
    }

    /**
     * @param $new_item = array("Text","Link")
     */
    public function addMenuItem($new_item)
    {
        array_push($this->menu_items, $new_item);
    }




}