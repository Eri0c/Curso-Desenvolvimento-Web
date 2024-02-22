<?php 
    /**Classe Painel
     * Esta classe fornece funcionalidades ao painel de controle 
     * como verificação de login e logout.
     */
    class Painel
    {
        /**Verifica se o usuario está logado 
         * @return bool retorna true se o usuario estiver logado, caso contrário, retorna false
        */
        public static function logado(){
            return isset($_SESSION['login']) ? true : false; //se existir $_SESSION['login'] retorna true caso contrario retorna false
        }

        /**Realiza o logout do usuario, destruindo a sessão e redirecionando para a pádina de login 
         * @return retorna void
        */
        public static function loggout(){
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);
        }
    }
?>