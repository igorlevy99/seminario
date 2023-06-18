<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/pagina_inicial.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <!--icone abre menu-->
    <i class="bi bi-list menu-mobile"></i>
    <!--Menu lateral-->
    <aside id="header">
        <!--seção de foto de perfil e redes sociais-->
        <section class="profile">
            <img src="img/logo.jpeg" alt="Foto do Igor">
            <h1>Barbearia</h1>
        </section>
        <!--menu de navegação dentro da barra lateral-->
        <nav id='navbar' class="nav-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#inicio"><i class="bi bi-house"></i> Página Inicial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#cortes"><i class="bi bi-scissors"></i> Cortes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre"><i class="bi bi-person-circle"></i> Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agendamento.php"><i class="bi bi-envelope"></i>Agendamento</a>
                </li>
              </ul>
        </nav>
    </aside>
    <!--Pagina inicial-->
    <main id="main">
        <!--Apresentação-->
        <section class="row m-0 p-0" id="inicio">
            <div class="col-md-5 d-flex justify-content-center align-items-center flex-column">
                <h2 class="text-white text-shadow">Barbearia</h2>
                <span id="subtitle" class="text-white text-shadow"></span>
                <!--Login Entrar-->
                <div class="pb-4 pt-4">
                    <a href="agendamento.php">
                        <button type="button" href="agendamento.php" class="btn btn-secondary btn-lg">Agendamento</button>
                    </a>
                </div>
            </div>
            <!--Arraste para mais-->
            <div class="col-md-7 d-flex justify-content-end align-items-end">
                <div id="arraste" class="d-flex align-items-center">
                    <i class="bi bi-arrow-down text-white pe-2 fs-2" aria-hidden="true"></i><a href="#sobre">Arraste para mais</a>
                </div>


            </div>

        </section>
        
        <!--Sobre-->
        <section class="container mt-5" id='sobre'>
            <div class="row w-100">
                <div class="col-md-12" data-anime="down">
                    <h2 class='pt-3'>Sobre</h2>
                    <p>
                        Uma barbearia é um estabelecimento especializado em serviços de cuidados masculinos, especialmente em relação à barba e ao cabelo. Os profissionais de uma barbearia são conhecidos como barbeiros, e eles são treinados para fornecer serviços como corte de cabelo, barba e bigode, aparar os pelos faciais, fazer a barba com navalha, aplicar loções e cremes para a pele e couro cabeludo, e outros serviços relacionados ao cuidado pessoal masculino. As barbearias modernas oferecem uma variedade de serviços para seus clientes, incluindo cortes de cabelo clássicos e modernos, cuidados com a barba e bigode, tratamentos de pele e couro cabeludo, massagem, além de outros serviços como depilação e manicure masculina. As barbearias também vendem uma variedade de produtos para cuidados pessoais, como pomadas, cremes de barbear, loções pós-barba, xampus e condicionadores. As barbearias têm uma longa história e uma forte tradição em muitas culturas. Antes da popularização dos salões de beleza unissex, as barbearias eram o lugar onde os homens se reuniam para se socializar e conversar sobre política, esportes e outras questões. As barbearias também eram um lugar onde os homens podiam obter conselhos sobre moda e estilo, além de relaxar e aproveitar um momento de tranquilidade. Hoje, as barbearias continuam a oferecer aos homens um espaço exclusivo onde eles podem cuidar de si mesmos e desfrutar de um momento de descontração e lazer.
                    </p>

                </div>
            </div>
        </section>

        <!--seção de Cortes-->
        <section class="section-bg mt-5" id="cortes">
            <div class="container pb-5 pt-5" data-anime="left">
                <h2 class="pb-4">Cortes</h2>
                <div id="carouselProjetos" class="carousel carousel-dark slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card">
                                        <img src="img/corte_curto.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Discreto</h5>
                                        <p class="card-text">O corte de cabelo discreto é geralmente caracterizado por um estilo simples e minimalista que não chama muita atenção. Pode ser uma boa opção para quem prefere um visual mais discreto e conservador, ou para quem precisa de um corte mais tradicional para o trabalho ou outras ocasiões formais. Normalmente, o corte discreto é feito em camadas suaves para criar um visual natural e elegante, sem grandes destaques ou franjas muito marcantes. É uma escolha popular para quem busca um visual sofisticado e atemporal.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="img/corte_medio.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Organizado</h5>
                                        <p class="card-text">O corte de cabelo organizado é caracterizado por um estilo bem estruturado e limpo, com linhas claras e precisas. É uma opção popular para quem gosta de um visual mais formal e profissional. Normalmente, o corte organizado envolve um acabamento cuidadoso e simétrico, com camadas ou desfiados sutis para adicionar textura e movimento ao cabelo. Pode ser acompanhado por um penteado arrumado e polido para completar o visual. É uma escolha popular para quem precisa de um estilo de cabelo que transmita uma imagem profissional e confiável.</p>
                                        </div>
                                    </div>
                                 </div>
                                <div class="col">
                                    <div class="card">
                                        <img src="img/corte_longo.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Artista</h5>
                                        <p class="card-text">O corte de cabelo artista é caracterizado por um estilo criativo e ousado, muitas vezes incorporando elementos de arte e design. É uma opção popular para pessoas que gostam de experimentar com estilos de cabelo únicos e inovadores. Normalmente, o corte artista envolve cortes assimétricos, camadas ousadas, cores vibrantes e outros detalhes que fazem uma declaração de moda ousada. Pode ser acompanhado por penteados excêntricos ou acessórios para completar o visual. É uma escolha popular para quem quer expressar sua individualidade e personalidade através do cabelo. No entanto, é importante notar que esse tipo de corte pode exigir manutenção frequente e cuidados específicos para manter sua aparência vibrante e chamativa.</p>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </main>
    


    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="script/pagina_inicial.js"></script>
</body>
</html>