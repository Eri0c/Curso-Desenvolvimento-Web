<!-- index.php -->

<?php
    // Inclui o arquivo de configuração (config.php)
    include('config.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Configurações do cabeçalho HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 01</title>

    <!-- Inclusão de estilos externos -->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH;?>estilo/style.css" rel="stylesheet">

    <!-- Metadados para SEO -->
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />

</head>

<body>
    <!-- Configuração da base para URLs relativas -->
    <base base="<?php echo INCLUDE_PATH; ?>" />

    <?php
        // Obtém a variável 'url' da query string ou define como 'home' por padrão
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        // Switch case para definir a ação com base na URL
        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos"/>';
                break;

            case 'servicos':
                echo '<target target="servicos" />';
                break;
        }
    ?>

    <!-- Mensagens de sucesso e erro -->
    <div class="sucesso">Formulário enviado com sucesso!</div><!--sucesso-->
    <div class="erro">Algum erro ocorreu</div><!--erro-->

    <!-- Overlay de carregamento -->
    <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif">
    </div><!--overlay-loading-->

    <!-- Cabeçalho -->
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div><!--logo-->

            <!-- Menu de navegação (desktop) -->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav>

            <!-- Menu de navegação (mobile) -->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>

            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <!-- Conteúdo principal -->
    <div class="container-principal">
        <?php
            // Inclui dinamicamente o conteúdo da página com base na URL
            if(file_exists('pages/'.$url.'.php')){
                include('pages/'.$url.'.php');
            } else {
                // Página não existe; redireciona para a página de erro 404 ou exibe a página inicial
                if($url != 'depoimentos' && $url != 'servicos'){
                    $pagina404 = true;
                    include('pages/404.php');
                } else {
                    include('pages/home.php');
                }
            }
        ?>
    </div><!--container-principal-->

    <!-- Rodapé -->
    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    <!-- Inclusão de scripts JavaScript -->
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

    <?php
        // Inclusão de scripts específicos para determinadas páginas
        if($url =='home' || $url == ''){
    ?>
        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>

    <?php
        if($url == 'contato'){
    ?>
        <!-- Inclusão do script do Google Maps para a página de contato -->
        <script defer src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4&callback=Function.prototype'></script>
        <script src="<?php  echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>        

    <!-- Outros scripts opcionais -->
    <!--<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>-->
    <script src="<?php  echo INCLUDE_PATH; ?>js/formularios.js"></script>

</body>

</html>
