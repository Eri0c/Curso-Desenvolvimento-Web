<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/fontawesome.min.css">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet"/>


    <title>Painel de controle</title>
</head>
<body>
    
    <div class="box-login">
    <?php 
        if(isset($_POST['acao'])){//se existir o POST acão é porque clicamos no botao do formulario e quer logar
            $user = $_POST['user'];
            $password = $_POST['password'];
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ? ");//preparando uma QUERY(comando para executar no banco de dados)
            $sql->execute(array($user,$password));//array é uma sequencia com base nos pontos de interrogação e apartir de agora a query foi executada.
            if($sql->rowCount() == 1){//Quer dizer que existe o usuario com base nas informações passadas pelo login e senha do usuario
                //logamos com sucesso
                $_SESSION['login'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['password'] = $password;
                header('Location: '.INCLUDE_PATH_PAINEL);
                die();
            }else{
                //falhou
                echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou senha incorretos! </div>' ;
            }
        }
    ?>
        <h2>Efetue o login:</h2>
        <form method="post">
            <input type="text" name="user" placeholder="Loggin..." required>
            <input type="password" name="password" placeholder="Senha..." required>
            <input type="submit" name="acao" value="Logar!">
        </form>
            


    </div><!--box-login-->
</body>
</html>