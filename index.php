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
<?php 
                if(isset($_POST['acao']) &&['identificador'] == 'form_home'){
                    //Enviei o formulario
                    if($_POST['email'] != ''){
                        $email = $_POST['email'];
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            //tudo certom é um email.
                            //só enviar
                            $mail = new Email('vps.dankicode.com','testes@dankicode.com','gui123456', 'Guilherme');
                            $mail->addAdress('ericmoraes1998@gmail.com','Eric');
                            $corpo= "Email cadastrado na home do site: <hr>$email";
                            $info = array('assunto'=>'um novo email cadastrado no site','corpo'=>$corpo);
                            $mail->formatarEmail($info);
                            if($mail->enviarEmail()){
                                echo 'Enviado com sucesso!';
                            }else{
                                echo 'Algo deu errado';
                            }
                        }else{
                            echo 'Não é um email valido.';
                        }
                        
                    }else{
                        echo 'Insira um email válido.';
                    }
                }else if(isset($_POST['acao']) && $_POST['identificador'] == 'form_contato'){
                   /* $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $mensagem = $_POST['mensagem'];
                    $telefone = $_POST['telefone'];*/
                    $assunto = 'Nova mensagem no site!';
                    $corpo = '';
                    foreach ($_POST as $key => $value){
                        $corpo.=ucfirst($key).": ".$value;
                        $corpo.="<hr>";
                    }
                    $info = array('assunto'=>$assunto,'corpo'=>$corpo);
                    $mail = new Email('vps.dankicode.com','testes@dankicode.com','gui123456', 'Guilherme');
                    $mail->addAdress('ericmoraes1998@gmail.com','Eric');
                    $mail->formatarEmail($info);
                    if($mail->enviarEmail()){
                        echo 'Enviado com sucesso!';
                    }else{
                        echo 'Algo deu errado';
                    }

                }
            ?>
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
    <script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>
</body>
</html>