// Khi nhấn nút Gửi ngay:
// Hiện hộp liệt kê Họ và Tên, Số điện thoại và Email
// Diễn giải:
// Khi nhấn nút Submit
// - Đọc giá trị đối tượng customerName
// - Đọc giá trị đối tượng customerNumberPhone
// - Đọc giá trị đối tượng customerEmail
// - Viết ra hộp alert ghép các tên đó với nhau


// Định nghĩa Class 


$(document).ready(function () {
    $("#submit").click(function (e) { 
        e.preventDefault();

        //doc gia tri tu form
        var ten = $("input[name*='customerName']").val();
        var dt = $("input[name*='customerNumberPhone']").val();
        var email = $("input[name*='customerEmail']").val();
        var ketqua = ten + "" + dt + "" + email;

        $("#textBox").val(ten +" "+dt+" "+email);

        alert( ten+" "+dt+" "+email);
    });

});