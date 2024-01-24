<?php 
    
    $autoload = function($class){
        if($class =='Email'){
            include('classes/phpmailer/PHPMailerAutoLoad.php');
        }

        include('classes/'.$class.'.php');

    };

    spl_autoload_register($autoload);


    define('INCLUDE_PATH','http://localhost//Danki%20code/Desenvolvimento%20Web/Projeto_1/');


?>