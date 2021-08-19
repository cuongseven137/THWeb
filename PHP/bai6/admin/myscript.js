$(document).ready(function(){
    // Kiểm tra alert
    $('.delelete_link').click(function (e){
        if (confirm("Có muốn xóa hay không?")){
            // Tiếp tục link remove
        }else{
            // Hủy bỏ không xóa
           e.preventDefault();
        };
    })

});