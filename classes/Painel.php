<?php
    /**
     * Classe Painel
     * 
     * Esta classe fornece funcionalidades ao painel de controle, como verificação de login e logout.
     */
    class Painel
    {
        /**
         * Verifica se o usuário está logado.
         *
         * @return bool Retorna true se o usuário estiver logado, caso contrário, retorna false.
         */
        public static function logado()
        {
            return isset($_SESSION['login']) ? true : false;
        }

        /**
         * Realiza o logout do usuário, destruindo a sessão e redirecionando para a página de login.
         *
         * @return void
         */
        public static function loggout()
        {
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);
        }

        /**
         * Carrega a página solicitada, considerando o parâmetro 'url' na URL.
         * Se nenhum parâmetro for fornecido, carrega a página inicial.
         *
         * @return void
         */
        public static function carregarPagina()
        {
            if (isset($_GET['url'])) {
                $url = explode('/', $_GET['url']);
                
                // Verifica se o arquivo da página existe
                if (file_exists('pages/'.$url[0].'.php')) {
                    include('pages/'.$url[0].'.php');
                } else {
                    // Página não existe, redireciona para a página inicial do painel
                    header('Location: '.INCLUDE_PATH_PAINEL);
                }
            } else {
                // Se nenhum parâmetro 'url' fornecido, carrega a página inicial
                include('pages/home.php');
            }
        }
    }
?>
