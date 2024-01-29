<?php include('config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Projeto 01</title>
    
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>fonts/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
    rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH;?>estilo/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" contents="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon"/>
    <meta charset="UTF-8">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>"/>
    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos"/>';
                break;
            
                case 'servicos':
                    echo '<target target="servicos" />';
                    break;
        }
    ?>
    <div class="sucesso">Formulário enviado com sucesso!</div><!--sucesso-->
    <div class="erro">Algum erro ocorreu</div><!--erro-->
        
    <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif">
    </div><!--overlay-loading-->
    
    <header>
        <div class="center">
        <div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                <li><a realtime="contato" href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
            <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                <<li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                
            </ul>
        </nav>
        <div class="clear"></div><!--clear-->
    </div><!--center-->
    </header>
    <div class="container-principal">

    <?php 
    
    

    if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
    }else{
        //Podemos fazer o que quiser, pois a pagina não existe.
        if($url != 'depoimentos' && $url != 'servicos'){
            $pagina404 = true;
            include('pages/404.php');
        }else{
            include('pages/home.php');
        }
    }
    
    ?>
   
   </div><!--container-principal-->

   <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
    <div class="center">
        <p>Todos os direitos reservados</p>
    </div><!--center-->
   </footer>
   <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php 
        if($url =='home' || $url == ''){
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>
   <?php 
        if($url == 'contato'){
    ?>
   <script defer src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4&callback=Function.prototype'></script>
   <script src="<?php  echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>        
    <!--<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>-->
    <script src="<?php  echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>