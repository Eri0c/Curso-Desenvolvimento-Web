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

    //Conectar com banco de dados!
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_01');

    //Funções

    function pegaCargo($cargo){
        $arr = ['0' => 'Normal', '1' => 'Sub Administrador', '2' => 'Administrador'];

        return $arr[$cargo];
    }


?>