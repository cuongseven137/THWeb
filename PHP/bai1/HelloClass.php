<?php
// Định nghĩa loại đối tượng PHP - Class

class HelloClass
{
    // Biến
    private $content;

    // Phương thức - Thuộc tính

    // mặc định tự chạy khi new object
    function __construct()
    {
        $this->content = "Hallo !!!";
        $this->say_hello();
    }

    // lấy thuộc tính nội dung
    public function get_content()
    {
        return $this->content;
    }

    // đặt nội dung mới
    public function set_content($noidung)
    {
        $this->content = $noidung;
    }

    // viết nội dung
    public function say_hello()
    {
        echo sprintf('%s</br>', $this->content);
    }


}