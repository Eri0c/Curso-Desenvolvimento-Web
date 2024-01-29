$(function(){
  

   $('body').on('submit','form',function(){
        var form = $(this);
        $.ajax({
            url:include_path + 'ajax/formularios.php',//enviar requisição
            method:'post',
            dataType:'json', //tipo que estamos esperando de retorno-- recuperar variaveis
            data: form.serialize()
        }).done(function(data){
            if(data.sucesso){
                //Tudo certo
            }else{
                //Algo deu errado.
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log("Erro na requisição AJAX: " + textStatus, errorThrown);
        });
        
        return false;
   });
});
