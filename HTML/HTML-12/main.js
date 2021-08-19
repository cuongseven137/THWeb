$(document).ready(function () {

    // Sử dụng Plugin
    // $("h2").HelloText({
    //     color: "black",
    //     text: "Hello OK...."
    // });

    // $("h4").HelloText();
    // $("h5").HelloText({
    //     color: "green",
    //     text: "This is Heading 5"
    // });   

    $(".news-grid").PhotoGrid({
        columns: 3,
        border: true,
        radius: "30px"
    });

    $(".news-grid.small").PhotoGrid({
        columns: 6,
        border: false,
        radius: "15px"
    });


});