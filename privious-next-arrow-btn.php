Previous and next arrow button using keyboard

   $('body').keyup(function(e){
        
        console.log(e.which);
        var first_element = false;
        var last_element = false;
        var prevElement = "";
        var next = false;

        if( e.which == 13) {
            $('.exi_list .active').parent('.subcategory_menu').click();
        }
        
        $('.exi_list .logo_wrp').each(function(){
            
            if( next ) {
                console.log('sdfasdfs');
                next = false;
                $('.exi_list .logo_wrp').removeClass('active');
                $(this).addClass('active');
                var target = $(this);
                
                //$(".container.wrapper").scrollTop($( target ).offset().top);
                return false; 
            }

            if( $(this).hasClass('active') )
            {
                if( e.which == 39){
                   next = true;
                }
                if( e.which == 37){
                    if(prevElement != "" ){
                       $('.exi_list .logo_wrp').removeClass('active');
                       $(prevElement).addClass('active');
                  //     $(".container.wrapper").scrollTop($( prevElement ).offset().top);
                       return false; 
                   }
                }
            }
            

            prevElement = $(this);

        });

        /*var current_item  = $('.exi_list .active');
        $('.exi_list .active').removeClass('active');
        if( e.which == 37 ){

            $(current_item).next('.logo_wrp').addClass('active');
        }
        if( e.which == 39 ){

            $(current_item).prev('.logo_wrp').addClass('active');
        }*/

    });
