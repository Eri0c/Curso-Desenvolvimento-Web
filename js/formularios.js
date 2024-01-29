$(function(){
  

   $('body').on('submit','form',function(){
        var form = $(this);
        $.ajax({
            beforeSend:function(){
                $('.overlay-loading').fadeIn();//Mostrar o gif de loading
            },
            url:include_path + 'ajax/formularios.php',//enviar requisição
            method:'post',
            dataType:'json', //tipo que estamos esperando de retorno-- recuperar variaveis
            data: form.serialize()
        }).done(function(data){
            if(data.sucesso){
                //Tudo certo
                $('.overlay-loading').fadeOut();//Tirar o gif de loading
                $('.sucesso').fadeIn();
                setTimeout(function(){
                    $('.sucesso').fadeOut();
                },3000)
            }else{
                //Algo deu errado.
                $('.overlay-loading').fadeOut();//Tirar o gif de loading
                $('.erro').fadeIn();
                setTimeout(function(){
                    $('.erro').fadeOut();
                },3000)
            }
        });
        
        return false;
   })
})
