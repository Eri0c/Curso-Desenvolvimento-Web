<?php
    // Inicialização da sessão para armazenar dados
    session_start();

    // Função de autoload para carregar automaticamente as classes necessárias
    $autoload = function($class){
        // Verifica se a classe é 'Email' e inclui o PHPMailerAutoLoad
        if($class == 'Email'){
            include('classes/phpmailer/PHPMailerAutoLoad.php');
        }

        // Inclui a classe específica com base no nome fornecido
        include('classes/'.$class.'.php');
    };

    // Registra a função de autoload
    spl_autoload_register($autoload);

    // Definição de constantes para caminhos
    define('INCLUDE_PATH','http://localhost//Danki%20code/Desenvolvimento%20Web/Projeto_1/');
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

    // Configuração de acesso ao banco de dados
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_01');

    // Função para obter o nome do cargo com base no código
    function pegaCargo($cargo){
        $arr = ['0' => 'Normal', '1' => 'Sub Administrador', '2' => 'Administrador'];

        // Retorna o nome do cargo correspondente ao código
        return $arr[$cargo];
    }
?>
