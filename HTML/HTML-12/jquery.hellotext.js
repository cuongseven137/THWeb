/* Nội dung của Plugin HelloText

    Chức năng: Tạo nội dung và màu vào một đối tượng HTML bất kỳ

    các Options:

    - color: <màu chữ>
    - text: <nội dung chữ>

*/

(function($){

    // Tạo hàm của Plugin

    $.fn.HelloText = function(options){


        // Giá trị mặc định
        var defaults = {
            color: "green",
            text: "Hello World!!!"
        }

        // Tổng hợp tùy chọn và mặc định
        var settings = $.extend(defaults, options);  

        // Thực hiện áp dụng các options vào đối tượng
        this.css("color", settings.color);
        this.text(settings.text);


        // Trả lại đối tượng cho các lệnh nối đuôi
        return this;
        
    }


}(jQuery))