(function($) {

    
    $.fn.PhotoGrid = function(options) {
        
        var defaults = {
            columns: 3,
            border: true,
            radius: '10px'
        }

        var settings = $.extend(defaults, options);
               
        this.find(".news_item").css("width",(100/settings.columns) + "%");

        if (settings.border == false) {
            this.find(".shadow").css("box-shadow","none");     
        }
        
        this.find(".shadow").css("border-radius",settings.radius);        
        this.find("img").css("border-radius",settings.radius + " " + settings.radius + " 0 0");
              


        return this;
    }


}(jQuery))