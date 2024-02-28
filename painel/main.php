<?php

    if(isset($_GET['loggout'])){
        Painel::loggout();
    }

?>
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
<div class="menu">
    <div class="menu-wraper">
   <div class="box-usuario">
    <?php 
        if($_SESSION['img'] == ''){
    ?>
        <div class="avatar-usuario">
            <i class="fa-solid fa-user"></i>
        </div><!--avatar-usuario -->
        <?php }else{ ?>
            <div class="imagem-usuario">
            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img'];?>"/>
        </div><!--avatar-usuario -->
        
        <?php }?>
        <div class="nome-usuario">
            <p><?php echo $_SESSION['nome']; ?></p>
            <p><?php echo  pegaCargo($_SESSION['cargo']); ?></p>
        </div><!--nome-usuario -->
   </div><!--box-usuario -->
   <div class="items-menu">

            <h2>Home</h2>
            <h2>Cadastro</h2>
            <a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-depoimento">Cadastrar Depoimento</a>
            <a href="">Cadastrar Serviço</a>
            <a href="">Cadastrar Slides</a>

            <h2>Gestão</h2>
            <a href="">Listar Depoimentos</a>
            <a href=""> Listar Serviço</a>	
            <a href=""> Listar Slides</a>	
            <h2>Administração do Painel</h2>
            <a href="">Editar Usuários</a>
            <a href="">Adicionar Usuários</a>
            <h2>Configuração Geral</h2>
            <a href="">Editar </a>
            	
   </div><!--items-menu-->
   </div><!--menu-wraper -->
</div><!--menu -->


<header>
    <div class="center">
        <div class="menu-btn">
            <i class="fa fa-bars"> </i>
        </div><!--menu-btn -->
        
        <div class="loggout">
            <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fa fa-home " ></i> <span>Página Inicial</span></a>
            
            <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-right-from-bracket"><span>Sair </span></i></a>
        </div><!--loggout -->
        <div class="clear"></div><!--clear -->
    </div><!--center -->

</header>
<div class="content">
    <?php Painel::carregarPagina(); ?>
   
</div><!--content -->
<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>
</html>