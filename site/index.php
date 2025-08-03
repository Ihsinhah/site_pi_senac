<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Salão de beleza">
    <meta name="keywords" content="cabelo, unhas, maquiagem, manicure,Embelleze">
    
    <!-- scripts -->
    <script src="carousel.js" defer></script>
    <script src="menu-mobile.js" defer></script>
    <script src="fixed-bar.js" defer></script>
    <!-- link bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- end css link -->

    <title>Espaço das Bunitas</title>
</head>

<body>
    <header>
        <!--header-->
        <div class="interface"><!--interface-->

            <i class="bi bi-list list-icon" id="open-menu"></i>

            <div class="menu-mobile" id="menu-mobile"><!--Menu mobile-->

                <div class="button-close">
                    <i class="bi bi-x-lg"></i>
                </div>
                
                <nav>
                    <ul>
                        <a href="login.php"><i class="bi bi-person-fill"></i></a>
                        <li><a href="#home">Início</a></li>
                        <li><a href="#trabalhosLocal">Meus trabalhos</a></li>
                        <li><a href="#contatoLocal">Contato</a></li>
                        <li><a href="#sobremimLocal">Sobre mim</a></li>
                    </ul>
                </nav>
                
            </div><!--end menu mobile-->
            <div class="overlay-menu" id="overlay-menu"></div>

            <div class="contact-header">
                <p><a href="https://www.instagram.com/espaco_dasbunitas/">@espacodasbunitas</a></p>
                <p>(11)94956-2565</p>
            </div>

            <!-- <div class="search-bar">
                <i class="bi bi-search"></i>
                <input type="search" name="search" id="search-box" placeholder="Pesquisar..." />
            </div> -->

            <div class="login flexbox">
                <a href="login.php"><i class="bi bi-person-fill"></i></a>
                <a href="login.php">
                    <p>ENTRAR | CADASTRAR</p>
                </a>
            </div>

            <div class="header-logo">
                <img src="midia/logotipoEspacoDasBunitas2.png" alt="Logotipo Espaço das bunitas">
            </div>
        </div><!--end interface-->
    </header>
    <!--end header-->



    <main>
        <section class="top">
            <!--top-->
            <nav class="desktop">
                <div class="flexbox" id="navbar">
                    <ul>
                        <li><a href="#home">Início</a></li>
                        <li><a href="#trabalhosLocal">Meus trabalhos</a></li>
                        <li><a href="#contatoLocal">Sobre mim</a></li>
                        <li><a href="#sobremimLocal">Contate-me</a></li>
                    </ul>
                </div>
            </nav>
        </section>

        <!--end top-->

        <!-- carousel -->
        <section class="carousel">
            <div class="slide-container">
                <div class="transition">
                    <img src="midia/carrossel_6.jpg" class="fade" alt="Imagem 1">
                </div>

                <div class="transition">
                    <img src="midia/carrouselImage1.png" class="fade" alt="Imagem 2">
                </div>

                <div class="transition">
                    <img src="midia/carrossel_6.jpg" class="fade" alt="Imagem 3">
                </div>
            </div>

            <div class="dot-center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </section>
        <!-- end carousel -->

        <section class="trab"><!-- trabalhos -->
            <div class="interface">
                    <h1 id="trabalhosLocal">MEUS <span>TRABALHOS</span></h1>

                    <div class="flexbox">
                        <div class="img-port" style="background-image: url(midia/beleza/imagemCabelo.jpg);">
                            <div class="overlay">Cabelo</div>
                        </div>

                        <div class="img-port" style="background-image: url(midia/beleza/imagemUnhas.jpg);">
                            <div class="overlay">Unhas</div>
                        </div>

                        <div class="img-port" style="background-image: url(midia/beleza/imagemMaquiagem.jpg);">
                            <div class="overlay">Maquiagem</div>
                        </div>
                    </div>
            </div>
        </section><!-- end works -->

        <!-- sobre -->
        <section id="sobremimLocal" class="sobre">
            <div class="interface">
                <h2>Sobre mim</h2>
                <div class="flexbox">
                    <div class="texto_sobre">
                        <p>Em 2015, fui demitida de uma ONG e, após conversar com meu marido, decidimos que seria melhor eu ficar em casa por causa dos custos com trabalho. No começo foi tranquilo, mas logo senti falta da rotina de sair e estar na rua.</p>
                        <p>Durante uma ida à escola do meu filho, tive a ideia de fazer um curso de manicure. Usei o seguro-desemprego para estudar na Embelleze, mesmo me decepcionando com o curso. Comecei a atender clientes cobrando R$10 para ajudar nos custos.</p>
                        <p>Divulguei meu trabalho no Desapego e, aos poucos, as clientes apareceram. Assim, dei o primeiro passo na minha nova profissão.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sobre -->
    </main>
    <footer class="footer">
        <h2>Meu contato</h2>
        <div class="interface">
            <div class="flexbox">
                <div class="contato">
                    <i class="bi bi-instagram"></i>
                    <a href="https://www.instagram.com/espaco_dasbunitas/">@espacodasbunitas</a>
                </div>
                <div id="contatoLocal" class="contato">
                    <i class="bi bi-telephone-outbound"></i>
                    <a href="">(11)94956-2565</a>
                </div>
            </div>

            <div class="texto">
                <p>&copy; 2025 Espaço das Bunitas. Todos os direitos reservados.</p>
                <p>Este site utiliza imagens protegidas por direitos autorais, incluindo fotografias de clientes, ambientes e serviços prestados pelo salão. Qualquer uso, reprodução, cópia, modificação, distribuição ou publicação de conteúdo deste site — seja ele texto, imagens autorais, logotipo, marca registrada ou qualquer outro material — sem autorização prévia e por escrito dos responsáveis legais é expressamente proibido e pode resultar em sanções civis e criminais, conforme previsto na legislação vigente.</p>
                <p>Feito por <a href="">CodeByte</a> <sup>&copy;</sup></p>
            </div>
        </div>
    </footer>

</body>

</html>