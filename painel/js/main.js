$(function(){
    
    var open = true;
    var windowSize = $(window)[0].innerWidth;

    var targetSizeMenu = (windowSize <= 400) ? 200 : 300;

    if(windowSize <= 768){
        $('.menu').css('width','0').css('padding','0');
        open = false;
    }

    $('.menu-btn').click(function(){
        if(open){
            //o menu esta aberto, precisamos fechar e adaptar nosso conteudo geral do painel
           $('.menu').animate({'width':0,'padding': 0},function(){
                open = false;
           });
           $('.content,header').css('width','100%');
           $('.content,header').animate({'left': 0},function(){
                open = false;
           });

        }else{
            //o menu está fechado
            $('.menu').css('display','block');
            $('.menu').animate({'width':targetSizeMenu+'px','padding': '10px'},function(){
                open = true;
           });
           $('.content,header').css('width','calc(100% - 300px)');
           $('.content,header').animate({'left':targetSizeMenu+'px'},function(){
                open = true;
           });

        }
        
    })
})