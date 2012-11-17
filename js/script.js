//slidshow 
function slideShow() {
 
    $('#gallery a').css({opacity: 0.0});
     
    $('#gallery a:first').css({opacity: 1.0});
     
    $('#gallery .caption').css({opacity: 0.7});

    $('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
     
    $('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
    .animate({opacity: 0.7}, 400);
     
    setInterval('gallery()',6000);
}
 
function gallery() { 
 
    var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));
 
    var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));   
        
    var caption = next.find('img').attr('rel'); 
     
    next.css({opacity: 0.0})
    .addClass('show')
    .animate({opacity: 1.0}, 1000);
 
    current.animate({opacity: 0.0}, 1000)
    .removeClass('show');
     
    $('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 }); 
     
    $('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '100px'},500 );
     
    $('#gallery .content').html(caption);        
}

$(document).ready(function() {         
    slideShow();
});

// contact validate
function validateText(str,len){
    return str.length >= len;
}

function validateEmail(str){
    var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;

    return emailPattern.test(str);
}

(function($){
    $(function(){
        $('form#contact').submit(function(){
            var feild, err=false;
    
            target = $('#name');
    
            if (validateText( target.val(), 3 )) {
    
                target.removeClass('err').addClass('ok');
    
            }else{
    
                target.removeClass('ok').addClass('err');
                err= true;
            }
    
            target = $('#email');
    
            if (validateEmail(target.val())) { 
    
                target.removeClass('err').addClass('ok');
            }else {
    
                target.removeClass('ok').addClass('err');
                err=true;
            }
    
            target = $('#message');
    
            if (validateText( target.val(), 7 )) {
    
                target.removeClass('err').addClass('ok');
    
            }else {
    
                target.removeClass('ok').addClass("err");
                err=true;
            }
    
            return !err;
        });
    });
})(Zepto);


// Anchor link for scroll
jQuery.fn.anchorAnimate = function(settings) {

    settings = jQuery.extend({
        speed : 1100
    }, settings);   
    
    return this.each(function(){
        var caller = this
        $(caller).click(function (event) {  
            event.preventDefault()
            var locationHref = window.location.href
            var elementClick = $(caller).attr("href")
            
            var destination = $(elementClick).offset().top;
            $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
                window.location.hash = elementClick
            });
            return false;
        })
    })
}

$(document).ready(function() {
    $("a.anchorLink").anchorAnimate()
});