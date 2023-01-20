<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/41224884b7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
    rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <script src="https://unpkg.com/scrollreveal"></script>

    <link rel="stylesheet" href="style.css" />

</head>


<body>
    <header>
        <nav class="container">
            <a href="#" class="logo">MyPet<span>Routine</span></a>
            <div class="links">
                <ul>
                    <li>
                        <a href="Cadastro/log_cad.php" class="nav-link">Login</a>
                    </li>
                    <li>
                        <a href="#about" class="nav-link">Sobre nós</a>
                    </li>
                    <li>
                        <a href="#skills" class="nav-link">Profissionais</a>
                    </li>
                    <li>
                        <a href="#contato" class="nav-link">Contato</a>
                    </li>
                    <li>
                        <a href="../SITE FUNÇÕES/dashboard.php" class="nav-link">Funções</a>
                    </li>
                    <!--
                    <li>
                        <a href="#" class="nav-link">Entrar</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Cadastrar-se</a>
                    </li>
                    -->
                </ul>
                <i class="fa-solid fa-moon toggle-btn" id="toggle-btn"></i>
            </div>
        </nav>
    </header>

    <section id="home">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner">
                        <video class="video-slide" src="images/Dog.mp4" style="top:80px;" autoplay muted loop></video>
                    </div>
                        <div class="carousel-caption">
                            <h2 class="animated bounceInRight" style="animation-delay: 1s">MyPet<span>Routine</span></h2>
                            <h3 class="animated bounceInLeft" style="animation-delay: 2s">Seja muito bem-vindo</h3><br>
                            <div class="content">
                                <div class="animated zoomIn" style="animation-delay: 3s">
                                    <a href="Cadastro/log_cad.php"><button href="Cadastro/log_cad.phpl" type="button" class="bottao"><span></span>Cadastre-se</button></a>
                                    <a href="Cadastro/log_cad.php"><button href="Cadastro/log_cad.php" type="button" class="bottao"><span></span>Login</button></a>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="item">
                    
                    <div class="banner" style="background-image: url(images/coelho.jpg);">
                        <div class="carousel-caption">
                            <h2 class="animated bounceInRight" style="animation-delay: 0s">Compartilhando<span><br /> uma vida</span></h2>
                            <h3 class="animated bounceInLeft" style="animation-delay: 1s">com responsabilidade!</h3><br>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="banner" style="background-image: url(images/Planner.jpg);"></div>

                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(images/cute_cat1.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 2s">Faça<span> Parte!</span></h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 1s">Melhore a rotina do seu pet</h3><br>
                    </div>
                </div>

                <div class="item">
                    <div class="banner" style="background-image: url(images/Capahome.jpg);"></div>

                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(images/chocolate.jpg);"></div>

                </div>
            </div>





                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </section>

    <!--<hr class="featurette-divider">-->

    <main>
    <section class="showcase-area" id="about">
        <div class="container">
                <div class="showcase-info">
                    <h3 class="sub-heading">Conheça a nossa empresa</h3>
                    <h1 class="heading">My Pet Routine</h1>
                    <p class="text">A empresa My Pet Routine foi fundada por um grupo de amigos apaixonados por animais, 
                    ambos decidiram que a ideia seria 100% voltada para os pets, afinal, eles são vidas
                    importantes que merecem todo carinho e cuidado que possa ser disponibilizado.</p>
                    <div class="cta">
                        <a href="#contato" class="btn">Contate nos</a>
                        <a href="Profissionais/Profissionais.html"  class="btn secondary-btn">Ler mais</a>
                    </div>
                </div>
                <div class="showcase-image">
                    <img src="images/Catabout.png" alt="CAT" class="animal">
                </div>
        </div>
    </section>
<!--
        <section class="about">
            <div class="container">
                <div class="about-grid">
                    <div class="about-info">
                        <h3 class="sub-heading">Sobre nós</h3>
                        <h1 class="heading">MyPetRoutine</h1>
                        <p class="text">Nós somos uma empresa bla bla bla...</p>
                        <div class="cta">
                            <a href="mypetroutine@EMAIL.COM" class="btn">Contate nos</a>
                            <a href="asdasdasdsad" class="btn">Download??</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
-->

    <!--<hr class="featurette-divider">-->

    <section class="skills-section" id="skills">
        <div class="container">
            <div class="skills-box">
                <div class="box-heading">
                    <h3 class="sub-heading">Profissionais</h3>
                    <h1 class="heading">Informações seguras e confiáveis</h1>
                    <div class="box-desc">
                        <p class="text">
                            A rede My Pets reflete em princípios fundamentais, como manter a transparência,
                            o cuidado com o pet e sua família ao transferir informações tão importantes. Para que
                            você se sinta ainda mais seguro em usar o nosso aplicativo, contamos com profissionais
                            qualificados que trouxeram informações acessíveis e essenciais para uma rotina mais organizada com o seu animal doméstico.
                        </p>
                        <a href="Profissionais/Profissionais.html" class="btn">Leia mais</a>
                    </div>
                </div>
                <div class="skills-wrap">
                    <div class="skill">
                        <div class="sk-progress">
                            <svg>
                                <circle cx="75" cy="75" r="68"></circle>
                            </svg>
                            <h2 class="counter">
                                <span data-target="89">0</span>%
                            </h2>
                        </div>
                        <div class="sk-title">HTML</div>
                    </div>

                    <div class="skill">
                            <div class="sk-progress">
                                <svg>
                                    <circle id="prosca" cx="75" cy="75" r="68";/>
                                </svg>
                                <h2 class="counter">
                                    <span data-target="68">0</span>%
                                </h2>
                            </div>
                            <div class="sk-title">CSS</div>
                    </div>

                    <div class="skill">
                            <div class="sk-progress">
                                <svg>
                                    <circle class="pro-2" cx="75" cy="75" r="68"/>
                                </svg>
                                <h2 class="counter">
                                    <span data-target="82">0</span>%
                                </h2>
                            </div>
                            <div class="sk-title">JavaScript</div>
                    </div>

                    <div class="skill">
                        <div class="sk-progress">
                            <svg>
                                <circle class="pro-3" cx="75" cy="75" r="68"/>
                            </svg>
                            <h2 class="counter">
                                <span data-target="55">0</span>%
                            </h2>
                        </div>
                        <div class="sk-title">UI Design</div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <section class="testemunhos" id="testimonial">
        <div class="container">

            <div class="section-background">
                <img src="images/cute_cat.png" alt="" class="animal-testemunho">
            </div>

            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client">
                            <img src="images/Mulher.png" alt="">
                            <div class="client-info">
                                <h4>Sofia Santos</h4>
                                <h5>Avaliadora inicial das funções<a href="#"></a></h5>
                            </div>
                        </div>
                        <q class="text">
                            Eu não poderia estar mais satisfeita com esse site, achei muito completo e espero que eles expandam 
                            ainda mais funções. Aos poucos estou me acostumando com uma rotina organizada, tenho um calendário
                            pros meus gatinhos, e não esqueço mais de alimentá-los.
                        </q>
                    </div>
    
                    <div class="swiper-slide">
                        <div class="client">
                            <img src="images/avaliar.png" alt="">
                            <div class="client-info">
                                <h4>Gisele Nascimento</h4>
                                <h5>Avaliadora inicial da plataforma<a href="#"></a></h5>
                            </div>
                        </div>
                        <q class="text">
                          Com o My Pet Routine eu consegui organizar a rotina do meu cachorro, deixando-o menos estressado. 
                          Agora eu sempre consigo encaixar passeios e brincadeiras no meio da minha rotina corrida, fico feliz por isso.
                        </q>
                    </div>
    
                    <div class="swiper-slide">
                        <div class="client">
                            <img src="images/Homem.png" alt="">
                            <div class="client-info">
                                <h4>João de Melo</h4>
                                <h5>Especialista em cuidados animais<a href="#"></a></h5>
                            </div>
                        </div>
                        <q class="text">
                            Assim como qualquer plataforma nova, há de evoluir, mas de ínicio esse site suple minhas necessidades,
                            e creio que as das pessoas também em relação aos seus pets. O aplicativo é ótimo para gerenciar informações,
                            mas ainda sim, senti falta de alarmes para os Curiosidades.
                        </q>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                
            </div>

            <div class="testemunhos-title">
                <h3 class="sub-heading">Avaliações</h3>
                <h1 class="heading">Avaliãções de clientes felizes</h1>
            </div>
        </div> 
    </section>
    </main>

    <section id="contato">
        <div class="containercontato">
            <h4 class="sent-notification"></h4>
            <h1>Entre em Contato</h1>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="enviar.php" class="contato-form">
                        <div class="form-group">
                            <input type="text" id="nome" class="form-control" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <input type="text" id="assunto" class="form-control" placeholder="Assunto">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="body" rows="4" placeholder="Mensagem"></textarea>
                        </div>
                        <button type="submit_email" onclick="sendEmail()" value="Send an Email" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
                <div class="col-md-6 contato-info">
                    <div class="follow"><b>Nome:</b> Miguel da Silva Pereira</div>

                    <div class="follow"><b>Assunto:</b> Anúncios</div>

                    <div class="follow"><b>Email:</b> admin@dominio.com</div>

                    <div class="follow"><label><b>Mídias Sociais:</b></label>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

</body>
</html>