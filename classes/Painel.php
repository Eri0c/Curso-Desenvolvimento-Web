<?php 

    class Painel
    {

        public static function logado(){
            return isset($_SESSION['login']) ? true : false; //se existir $_SESSION['login'] retorna true caso contrario retorna false
        }
        public static function loggout(){
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);
        }
    }
?>