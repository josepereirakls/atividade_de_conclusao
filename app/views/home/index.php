<?php 
    $this->view('home/cabecario');
?>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Iniciar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projetos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">SEJAM BEM VINDOS!!!</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Pagina criada para a disciplina de Projeto de Sistema Web.</h2>
            <a class="btn btn-primary js-scroll-trigger" href="">Vamos lá</a>
        </div>
    </div>
</header>
<!-- About-->
<section class="about-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Construido por Jose Pereira</h2>
                <p class="text-white-50">
                    Site criado por Jose Pereira no Curso de Progranador Web
                    <a href="https://github.com/josepereirakls/">Github</a>
                    Aqui você vai saber como os alunos do curso Programador Web, estão aprendendo.
                </p>
            </div>
        </div>
        <img class="img-fluid" src="assets/img/ipad.png" alt="" />
    </div>
</section>
<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container">
        <!-- Featured Project Row-->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg"
                    alt="" /></div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Shoreline</h4>
                    <p class="text-black-50 mb-0">Vida selvagem, os mangues têm a capacidade de impedir a erosão da
                        linha costeira e de mitigar os danos e perdas de vida
                        [...]</p>
                </div>
            </div>
        </div>
        <!-- Project One Row-->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="" /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Misty</h4>
                            <p class="mb-0 text-white-50">Caminhe pela floresta tropical de Misty Mountains nas trilhas
                                tradicionais dos povos aborígines Jirrbal e Mamu..</p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="" /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Montanhas</h4>
                            <p class="mb-0 text-white-50">Montanhas são grandes elevações da superfície terrestre.
                                Apresentam altitudes superiores a 300 metros e paisagem
                                acidentada. Formam-se por meio de acidentes geográficos!</p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signup-->
<section class="signup-section" id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h5 class="text-white mb-5">
                    <?php 
    $this->view('home/form');
?>
                </h5>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Endereço</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">Santa Fé -TO, Centro</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50"><a href="#!">josepereirakls2015@gmail.com</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Telefone</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50"> (55) 63 992457201</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="https://twitter.com/josepereirakls"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="https://www.facebook.com/joseereira.jp"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://github.com/josepereirakls/"><i class="fab fa-github"></i>
        </div>
</section>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50">
    <div class="container">Jose Pereira © Website 2020</div>
</footer>

</html>


<?php 
    $this->view('home/rodape');
?>