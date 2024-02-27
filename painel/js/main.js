// main.js

$(function(){
    // Início da função jQuery após o carregamento do documento

    // Variáveis de controle do estado do menu
    var open = true;
    var windowSize = $(window)[0].innerWidth;

    // Define o tamanho alvo do menu com base no tamanho da janela
    var targetSizeMenu = (windowSize <= 400) ? 200 : 300;

    // Verifica se a janela tem um tamanho menor ou igual a 768 pixels
    if(windowSize <= 768){
        // Configura o menu para estar fechado inicialmente
        $('.menu').css('width','0').css('padding','0');
        open = false;
    }

    // Adiciona um manipulador de eventos para o clique no botão do menu
    $('.menu-btn').click(function(){
        if(open){
            // O menu está aberto, precisamos fechar e adaptar o conteúdo geral do painel
            $('.menu').animate({'width':0,'padding': 0}, function(){
                // Callback para garantir que a animação foi concluída antes de ajustar o estado
                open = false;
            });
            $('.content,header').css('width','100%');
            $('.content,header').animate({'left': 0}, function(){
                // Callback para garantir que a animação foi concluída antes de ajustar o estado
                open = false;
            });
        } else {
            // O menu está fechado

            // Exibe o menu e anima para o tamanho alvo com um preenchimento específico
            $('.menu').css('display','block');
            $('.menu').animate({'width':targetSizeMenu+'px','padding': '10px'}, function(){
                // Callback para garantir que a animação foi concluída antes de ajustar o estado
                open = true;
            });

            // Ajusta o conteúdo e o cabeçalho para acomodar o menu aberto
            $('.content,header').css('width','calc(100% - 300px)');
            $('.content,header').animate({'left':targetSizeMenu+'px'}, function(){
                // Callback para garantir que a animação foi concluída antes de ajustar o estado
                open = true;
            });
        }
    });
    $(window).redize(function(){
        windoSize = $(window)[0].innerWidth;
        if(windowSize <= 768){
            $('.menu').css('width','0').css('padding','0');
            $('.content,header').css('width','100%').css('left','0');
            open = false;    
        }else{
            open = true;
            $('.content,header').css('width','calc(100% - 250px)').css('left','250px');
            $('.menu').css('width' , '250px').css('padding', '10px 0');
        }
    })
});
