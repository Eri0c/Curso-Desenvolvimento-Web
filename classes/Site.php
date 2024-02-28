<?php 
    //Esta classe fornece funcionalidades relacionadas a gestao de usuarios online no site.
    class Site{
        //Atualiza o status do usario online.
        //Se o usuario estiver registrado, atualiza a ultima ação no banco de dados.
        //Caso contrario, cria um novo registro para o usuario.

        public static function updateUsuarioOnline(){
            // Verifica se a sessão 'online' está definida
            if(isset($_SESSION['online'])){
                $token = $_SESSION['online'];
                $horarioAtual = date('Y-m-d H:i:s');
                // Atualiza a ultima ação do usuário no banco de dados
                $sql = MySql::conectar()->prepare("UPDATE `tb_admin.online` SET ultima_acao = ? WHERE token = ?");
                $sql->execute(array($horarioAtual,$token));
            }else{
                // Se a sessão 'online' não estiver definida, cria um novo registro para o usário
                $_SESSION['online'] = uniqid();
                $ip = $_SERVER['REMOTE_ADDR']; // Quanto estiver em um host retornara o valor real do endereço de ip do usuario
                $token = $_SESSION['online'];
                $horarioAtual = date('Y-m-d H:i:s');
                // Insere um novo registro na tabela 'tb_admin_online'
                $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.online` VALUES (null,?,?,?)");
                $sql->execute(array($ip,$horarioAtual,$token));
            }
        }

    }

?>