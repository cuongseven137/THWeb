// Khi nhấn nút Gửi ngay:
// Hiện hộp liệt kê Họ và Tên, Số điện thoại và Email
// Diễn giải:
// Khi nhấn nút Submit
// - Đọc giá trị đối tượng customerName
// - Đọc giá trị đối tượng customerNumberPhone
// - Đọc giá trị đối tượng customerEmail
// - Viết ra hộp alert ghép các tên đó với nhau

/* Cú pháp - công thức cơ bản 

    $(tên đối tượng).lệnh(function(){
        
        $(tên đối tượng).lệnh(function(){

        })

    }

    Trong đó
    - tên đối tượng (có thể đối tượng jQuery, javascript, HTML thông qua CSS Selector)
    - lệnh có thể thực hiện ngay hoặc chứa một function nếu nhiều lệnh nhỏ (thao tác, sự kiện)

    Tham số theo định dạng JSON
    
    {
        'font-size' : '50px',        
        'color' : 'red',
        'border':{
             'style':'solid',
             'color':'red',
             'width':'2px'
        }
    }

*/


$(document).ready(function(){

    // Khi click vào nút Submit thì ...

    $("#submit").click(function (e) { 
        e.preventDefault();
        
        // Đọc giá trị từ Form
        var ten = $("input[name*='customerName']").val();
        var dt = $("input[name*='customerNumberPhone']").val();
        var email = $("input[name*='customerEmail']").val();
        var ketqua = ten + " " + dt + " " + email;

        $("#textBox").val(ketqua);

        alert(ketqua);

    });


})