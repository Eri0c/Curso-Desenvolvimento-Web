<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
    rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet"/>


    <title>Painel de controle</title>
</head>
<body>
    
    <div class="box-login">
        <h2>Efetue o login:</h2>
        <form method="post">
            </form>
            <input type="text" name="user" placeholder="Loggin..." required>
            <input type="password" name="password" placeholder="Senha..." required>
            <input type="submit" name="acao" value="Logar!">


    </div><!--box-login-->
</body>
</html>