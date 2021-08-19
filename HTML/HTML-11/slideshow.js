$(document).ready(function () {
   
    // Gọi Slideshow
    // $(".owl-carousel").owlCarousel();



    var myslide = $(".myslide");
    
    myslide.owlCarousel({

        items:3,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true

    });

    // Nhấn vào link a.play để chạy
    $('.play').on('click',function(e){
        e.preventDefault();

        myslide.trigger('play.owl.autoplay',[1000])
    })

    // Nhấn vào link a.stop dừng
    $('.stop').on('click',function(e){
        e.preventDefault();
        
        myslide.trigger('stop.owl.autoplay')
    })


});