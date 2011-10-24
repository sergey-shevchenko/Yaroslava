var stopper = true;
var tail;
var tailWidth;
var margins = new Array();
jQuery(window).load(function(){
   gallery_init(); 
   carousel_init();
   opener_init();
})

function opener_init(){
    var i = 0;
    jQuery('.gallery-section').each(function(){
        margins[i]=parseInt(jQuery(this).css('margin-top'));
        i++;
    });
    jQuery('#opener').click(function(){
        if(jQuery(this).html()=='open all'){
            jQuery(this).addClass('active');
            stopper=true;
            jQuery(this).html('close all');
            jQuery('.gallery-section li').not('.title').each(function(){
                var imgWidth =  jQuery('a .thumb img', jQuery(this)).outerWidth();
                jQuery(this).stop().css('width', imgWidth+'px');
                jQuery('a img.stripe', jQuery(this)).css('display','none');
            });
            jQuery('.gallery-section').each(function(){
                 jQuery(this).stop().animate({marginTop: 83},'fast');
            });
            jQuery('#carousel_ctrl').show();
            carousel_init();
        }
        else {
            jQuery(this).removeClass('active');
            tail = jQuery('.gallery-wrapper ul li').length - Math.floor((jQuery('.gallery-wrapper ul li').length/39))*39;
            tailWidth = tail * 30;
            jQuery(this).html('open all');
            jQuery('.gallery-section li').not('.title').each(function(){
                jQuery(this).stop().animate({width: 25},'fast');
                jQuery('a img.stripe', jQuery(this)).css('display','block');
            });
            stopper = false;
            jQuery('.gallery-wrapper section').animate({marginLeft: '0'},'fast');
            var j=0;
            jQuery('.gallery-section').each(function(){
                jQuery(this).stop().animate({marginTop: margins[j]},'fast');
                j++;
            });
            if (jQuery('.gallery-wrapper ul li').not('.title').length < 40)
                jQuery('#carousel_ctrl').hide();
            else
                carousel_init();
        }
    })
}


function carousel_init() {
    tail = jQuery('.gallery-wrapper #gallery-inner').outerWidth() - Math.floor((jQuery('#gallery-inner').outerWidth()/1170))*1170;
    if(!jQuery('body').hasClass('home'))
        jQuery('.gallery-wrapper ul:last-child').append('<li style="width:'+(1170-tail-5)+'px; height:204px; background: #d8dadd; margin-right: -5px;"></li>');
    jQuery('#button_r').click(function(){
        if(parseInt(jQuery('.gallery-wrapper #gallery-inner').css('margin-left'))>-1*jQuery('.gallery-wrapper section #gallery-inner').outerWidth()+tail)
            jQuery('.gallery-wrapper #gallery-inner').animate({marginLeft: '-=1170'},'fast');
        else
             jQuery('.gallery-wrapper #gallery-inner').animate({marginLeft: '0'},'fast');
    });    
    jQuery('#button_l').click(function(){
        if(parseInt(jQuery('.gallery-wrapper #gallery-inner').css('margin-left'))<0)
            jQuery('.gallery-wrapper #gallery-inner').animate({marginLeft: '+=1170'},'fast');
        else
            jQuery('.gallery-wrapper #gallery-inner').animate({marginLeft: -1*jQuery('.gallery-wrapper section #gallery-inner').outerWidth()+tail},'fast');
    });
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
             if(!stopper) {
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
             }
        });
    });
}


jQuery(function(){
	positionFooter(); 
	function positionFooter(){
		var padding_top = jQuery("footer").css("padding-top").replace("px", "");
		var page_height = jQuery(document.body).height() - padding_top;
		var window_height = jQuery(window).height();
		var difference = window_height - page_height;
		//if (difference < 0) 
		//	difference = 0;
 
		jQuery("footer").css({
			padding: difference-10 + "px 0 0 0"
		})
	}
 
	jQuery(window)
		.resize(positionFooter)
});