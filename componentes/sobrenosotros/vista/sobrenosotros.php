<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sobre nosotros | Shoes&Co</title>
        <?php
        include_once "../../../componentes/layout/header.php";
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        ?>
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->       

    </head><!--/head-->

    <body>
        <header id="header">      
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 overflow">
                        <div class="social-icons pull-right">
                            <ul class="nav nav-pills">
                                <li><a href="https://www.facebook.com/ShoesCo-Footwear-1127750137243972/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="../../../componentes/home/vista/index.php">
                            <h1><img class="logo" src="../../../contenido/images/ShoesCoSmall.png" alt="Logotipo de Shoes&Co"></h1>
                        </a>

                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../../../componentes/home/vista/index.php">Home</a></li>
                            <li><a href="../../../componentes/catalogo/vista/catalogo.php">Catálogo</a></li>
                            <li class="active"><a href="../../../componentes/sobrenosotros/vista/sobrenosotros.php">Sobre nosotros</a></li>
                            <li><a href="../../../componentes/contacto/vista/contacto.php">Contacto</a></li>                          
                        </ul>
                    </div>
                    <div class="search">
                        <form role="form">
                            <i class="fa fa-search"></i>
                            <div class="field-toggle">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->


        <section id="page-breadcrumb">
            <div class="vertical-center sun">
                <div class="container">
                    <div class="row">
                        <div class="action">
                            <div class="col-sm-12">
                                <h1 class="title">Sobre nosotros</h1>
                                <p>Conoce mas acerca de nuestra empresa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#page-breadcrumb-->

    <!--<section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="images/aboutus/5.png" class="margin-bottom" alt="">
                    <h1 class="margin-bottom">About Our Company</h1>
                    <p>Pork chop duis eu pig, labore sausage venison. Shankle fugiat duis, filet mignon tri-tip venison beef shank ribeye<br /> aliqua cillum dolore sed do in.</p>
                </div>
            </div>
        </div>
    </section>-->
        <!--/#about-company-->

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                <img src="../../../contenido/contenidoimages/home/icon1.png" alt="Imagen alusiva a la misión de la empresa">
                            </div>
                            <h2>Misión</h2>
                            <p>Somos una compañía productora de calzado, que tiene como objetivo manufacturar un producto de óptima calidad, 
                                diseñando en consideración de las tendencias de moda actuales, para satisfacer las necesidades de las mujeres en Colombia 
                                que buscan en un calzado, comodidad y armonía con sus prendas de vestir.
                                Nuestra empresa adquiere las mejores materias primas y las somete a un proceso de transformación con personal altamente calificado, 
                                utilizando maquinaria de última generación para obtener un producto acorde a la preferencia actual del consumidor que cumple con las normas de calidad establecidas.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                                <img src="../../../contenido/contenidoimages/home/icon2.png" alt="Imagen alusiva a la visión de la empresa">
                            </div>
                            <h2>Visión</h2>
                            <p>Para el año 2020 nos consolidaremos como una de las compañías más reconocidas en la industria del 
                                calzado a nivel nacional, con una capacidad de producción aumentada y una infraestructura propia; mejorando nuestros procesos, prácticas
                                y estrategias para lograr el posicionamiento de la marca y la apertura hacia mercados nacionales.
                            </p>
                        </div>
                    </div>
                    <!--<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                                <img src="images/home/icon3.png" alt="">
                            </div>
                            <h2>Swift Page Builder</h2>
                            <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <!--/#services-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <!--<div class="col-sm-12 text-center bottom-separator">
                        <img src="images/home/under.png" class="img-responsive inline" alt="">
                    </div>-->

                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info bottom">
                            <h2>Contacto</h2>
                            <address>
                                E-mail: <a href="mailto:shoesco.footwear@gmail.com"
                                           >shoesco.footwear@gmail.com</a> <br> 
                                Teléfono: +57 (031) 551 72 53 <br> 
                            </address>


                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info bottom">

                            <h2>Dirección</h2>
                            <address>
                                Cra 24G # 20-04 sur <br> 
                                Barrio Restrepo <br> 
                                Bogotá, D.C. <br> 
                                Colombia <br> 
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info bottom">
                            <h2>Declaración de conformidad</h2>
                            <p>Este sitio web cumple con el nivel de conformidad AA 
                                de acuerdo a la declaración de la norma WCAG 2.0 de 
                                la WAI (Web Accesibility Initiative).</p>      
                        </div>
                        <!--<div class="contact-form bottom">
                            <h2>Envía tu mensaje</h2>
                            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Escribe tu mensaje"></textarea>
                                </div>                        
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-submit" value="Enviar">
                                </div>
                            </form>
                        </div>-->
                    </div>
                    <div class="col-sm-12">
                        <div class="copyright-text text-center">
                            <p>&copy; Shoes & Co Footwear 2017. Derechos reservados.</p>
                            <p>Diseñado por <a href="#">Diego Galeano, Laura Prada</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->

        <script type="text/javascript" src="/contenido/js/jquery.countTo.js"></script>  

    </body>
</html>
