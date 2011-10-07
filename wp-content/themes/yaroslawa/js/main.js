jQuery(window).load(function(){
   gallery_init(); 
   carousel_init();
});

function carousel_init() {
    var tail = jQuery('.gallery-wrapper ul li').length - Math.floor((jQuery('.gallery-wrapper ul li').length/39))*39;
    var tailWidth = tail * 30;
    jQuery('.gallery-wrapper ul').append('<li style="width:'+(1170-tailWidth-5)+'px; height:204px; background: #d8dadd; margin-right: -5px;"></li>');
    if (jQuery('.gallery-wrapper ul li').length > 40){
        var totalWidth = 0;
        jQuery('.gallery-wrapper ul li').each(function(){totalWidth+=jQuery(this).outerWidth()+5});
        jQuery('#button_r').click(function(){
            if(parseInt(jQuery('.gallery-wrapper section').css('margin-left'))>(-1*totalWidth+1170))
                jQuery('.gallery-wrapper section').animate({marginLeft: '-=1170'},'fast');
            else 
                jQuery('.gallery-wrapper section').animate({marginLeft: '0'},'fast');
        })
        jQuery('#button_l').click(function(){
            if (parseInt(jQuery('.gallery-wrapper section').css('margin-left'))<0)
                jQuery('.gallery-wrapper section').animate({marginLeft: '+=1170'},'fast');
            else
                jQuery('.gallery-wrapper section').animate({marginLeft: -(totalWidth-1170)},'fast');
        })
    } else {jQuery('#carousel_ctrl').hide();}
}

function gallery_init(){
    var stopper=true;
    var greys = jQuery('.gallery-section li .grey');
    var offsetLeft = parseInt(jQuery('ul.gallery-section').parent('section').css('margin-left'));
    greys_fade(0);    
    
    function greys_fade(object){
        jQuery(greys[object]).animate({opacity:0}, 100, function(){
            if (object < greys.length)
                greys_fade(object+1);
                if (object == greys.length - 1) stopper=false;
        });
    }
    
    
    jQuery('.gallery-section').each(function(){
        jQuery(this).hover(function(){
           if(!stopper) {
                jQuery(this).siblings('.gallery-section').stop().animate({opacity:0.35}, 'fast')
            }
        },function(){
            if(!stopper) {
                var jthis = jQuery(this);
                jQuery(this).siblings('.gallery-section').stop().animate({opacity:1}, 'fast')
            }
        })
    })
    jQuery('.gallery-section li').not('.title').each(function(){
        jQuery(this).hover(function(){
            if(!stopper) {
                var jthis = jQuery(this);
                var imgWidth =  jQuery('a .thumb img', jthis).outerWidth();
                jQuery('a img.stripe', jthis).css('display','none');
                if (jthis.hasClass('right')) {
                    jthis.parent('ul').parent('section').stop().animate({marginLeft: offsetLeft - (imgWidth-30)},'fast');
                    jthis.stop().animate({width: imgWidth},'fast');
                } 
                else {
                    jthis.stop().animate({width: imgWidth},'fast');
                }
            }
         },function(){
                var jthis = jQuery(this);
                 var imgWidth =  jQuery('a .thumb img', jthis).outerWidth();
                if (jthis.hasClass('right')) {
                    jthis.parent('ul').parent('section').stop().animate({marginLeft: offsetLeft},'fast');
                    jthis.stop().animate({width: '25px'},'fast', function(){
                        jQuery('a img.stripe', jthis).css('display', 'block');
                    });
                }
                else {
                    jthis.stop().animate({width: '25px'},'fast', function(){
                        jQuery('a img.stripe', jthis).css('display', 'block');
                    });
                }
        });
    });
}