function c(param){
    return console.log(param);
}
  
jQuery(document).ready(function() {


    /* if .navbar-fixed-top body padding from nav height*/
    if (jQuery('nav').is('.navbar-fixed-top')) {
        jQuery('body').css('padding-top', jQuery('.navbar').css('min-height'));
    };

    /* if .navbar-fixed-top body padding from nav height*/
    // if (jQuery('nav').is('.navbar-fixed-top')) {
    //     var nav_hght = parseInt(jQuery('.navbar').css('min-height'));
    //     var nav_pdt = parseInt(jQuery('.navbar').css('padding-top'));
    //     var nav_pdb = parseInt(jQuery('.navbar').css('padding-bottom'));
    //     var sum = nav_hght+nav_pdt+nav_pdb+'px';
    //     jQuery('body').css({'padding-top':sum});
    //     c(sum);
    // };

    /* Highlight code */
    hljs.initHighlightingOnLoad();

    /* footer */
    $('#template_content').css({'min-height':$('#template_content').outerHeight()+$(window).outerHeight()-$('body').outerHeight()})


    /*scrolltop*/
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
        }
    });
    jQuery('.scrollup').click(function(){
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });


    /*hotkey*/
    jQuery('html').keydown(function(eventObject){ //отлавливаем нажатие клавиш
        if (event.altKey && event.keyCode == 72){ //если нажали alt + h, то true
            jQuery('#hidden_field').toggle();
        }
    });

    /* #block_preview wihout .container class in //layout/back */
    jQuery('#block_preview').parent().removeClass('container'); 


    /*colorpicker*/
    jQuery(function() {
        jQuery('#colorpicker').colorpicker({
            customClass: 'colorpicker-2x',
            sliders: {
                saturation: {
                    maxLeft: 200,
                    maxTop: 200
                },
                hue: {
                    maxTop: 200
                },
                alpha: {
                    maxTop: 200
                }
            }
        });
    });

    /*select2*/
    jQuery("#select2").select2({
        // placeholder: "",
        allowClear: true
    });


});


function CheckRequired(){
    var state = 'ok';
    jQuery('.required').each(function(){
        var field = jQuery(this);
        if (field.val() == '') {
            field.parent().addClass('has-error');   
            field.focus();   
            setTimeout(function() {
                jQuery(field).parent().removeClass('has-error'); 
            }, 1500); 
            state = 'fail';  
        };
    });
    if (state == 'fail'){
        return false;
    }
}

function ItemDelete(elm, classname, item, url, refresh){
    var sure = confirm("Удаленные данные нельзя будет восстановить. Продолжить?");
    if (sure == true){  
        var lnk = jQuery(elm);
        var div = elm.closest('.item');
        jQuery.ajax({
            type: 'POST',
            url: url,
            data: {'item': item, 'classname': classname, },
            success: function(data){
                c(data);
                jQuery(div).slideUp(500);
                if (refresh == 'true') {
                    setTimeout(function() {
                        location.reload()
                    }, 500); 
                };
            }, 
            error: function(){
                alert('error');
            }
        });
    } else {
        return false;
    }
}

function testAnim() {
    var cls = jQuery('#animate_slct').val()
    jQuery('#animationSandbox').removeClass().addClass(cls + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        jQuery(this).removeClass();
    });
};

function ToggleArticleDetails(elm) {
    jQuery(elm).closest('.panel').find('.toggle').toggle(300);
};

function ShowAllArticleDetails() {
    jQuery('.toggle').each(function(){
        jQuery(this).show(300);
    });
    jQuery('#show_all').hide();
    jQuery('#hide_all').show();
};

function HideAllArticleDetails() {
    jQuery('.toggle').each(function(){
        jQuery(this).hide(300);
    });
    jQuery('#show_all').show();
    jQuery('#hide_all').hide();
};