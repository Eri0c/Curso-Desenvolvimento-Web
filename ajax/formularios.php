<?php 
/* AJAX Requisição em javaScript para o arquivo, no caso PHP, e o ajax retorna se teve sucesso ou erro.*/
    include('../config.php');
    $data = array();
    $assunto = 'Nova mensagem no site!';
    $corpo = '';
    foreach ($_POST as $key => $value){
        $corpo.=ucfirst($key).": ".$value;
        $corpo.="<hr>";
    }
    $info = array('assunto'=>$assunto,'corpo'=>$corpo);
    $mail = new Email('vps.dankicode.com','testes@dankicode.com','gui123456', 'Guilherme');
    $mail->addAdress('ericmoraes1998@gmail.com','Eric');
    $mail->formatarEmail($info);
    if($mail->enviarEmail()){
        $data['sucesso'] = true;
    }else{
        $data['erro'] = true;
    } 
    
    

    

    die(json_encode($data));//formata o array para que o JavaScript possa entender
?>