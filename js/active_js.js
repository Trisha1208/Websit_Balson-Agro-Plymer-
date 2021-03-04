 
$(document).ready(function(){
    
        var pageURL = $(location).attr("href");
        if(pageURL.indexOf("index") != -1){
            $(".nav>li>#home-tab").css('color', 'rgb(85, 177, 48)');
        } 

        else if(pageURL.indexOf("about_us") != -1){
            $(".nav>li>#about-tab").css('color', 'rgb(85, 177, 48)');
        } 

        else if(pageURL.indexOf("_p") != -1){
            $(".nav>li>#product-tab").css('color', 'rgb(85, 177, 48)');
        } 

        else if(pageURL.indexOf("download") != -1){
            $(".nav>li>#download-tab").css('color', 'rgb(85, 177, 48)');
        } 

        else if(pageURL.indexOf("contact_us") != -1){
            $("#inquiry-btn").prop('disabled', true);
            $(".nav>li>#contact-tab").css('color', 'rgb(85, 177, 48)');
        } 

});
