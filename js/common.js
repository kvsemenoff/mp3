

$(document).ready(function(){

    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });



    $("#btn1").click(function(){

    }); 

    // for popup 
    $('a[name=modal]').click(function(e) {
        console.log("we in popup a"); 
        e.preventDefault(); 
        var id = $(this).attr('href'); 
        var maskHeight = $(document).height(); 
        var maskWidth = $(window).width(); 
        console.log(maskHeight+'_'+maskWidth); 
        $('#mask').css({'width':maskWidth,'height':maskHeight}); 
        $('#mask').fadeTo("slow",0.32); 
        var winH = $(window).height(); 
        var winW = $(window).width(); 
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop; 
        console.log(winH+'_'+winW+"_"+posTop+"_id:"+id); 
        id = '#zvonok'; 
        $(id).css('top',  posTop+75); 
        $(id).css('left', winW/2-$(id).width()/2); 
        $(id).fadeIn(500); 
    }); 
    $("#mask").click(function(){
        $(this).css("display","none");
        var id = '#zvonok'; 
        $(id).css("display","none");
    });

    $(".de-exit_krest").click(function(){
        console.log('.de-exit_krest');
        var ids = $("#mask");
        ids.css("display","none");
        var id = '#zvonok'; 
        $(id).css("display","none");
    });

 });
