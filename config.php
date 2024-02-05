<?php 
    //Config me permite acesso a pasta classe e instanciar tudo o que contem nela, ex: email
    session_start();//armazenar os dados da sessão
    $autoload = function($class){
        if($class =='Email'){
            include('classes/phpmailer/PHPMailerAutoLoad.php');
        }

        include('classes/'.$class.'.php');

    };

    spl_autoload_register($autoload);


    define('INCLUDE_PATH','http://localhost//Danki%20code/Desenvolvimento%20Web/Projeto_1/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');


?>