<!DOCTYPE html>
<html lang="es">    
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inicio</title>
        <?php
        include_once "../../layout/header.php";
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        ?>
    </head>
    <body>
        <a href="#titulo1" class="sr-only sr-only-focusable skiplink" tabindex="1"><span>Ir al contenido</span></a>
        <header id="header">      
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 overflow">
                        <div class="social-icons pull-right">
                            <ul class="nav nav-pills">
                                <li tabindex="2"><a href="https://www.facebook.com/ShoesCo-Footwear-1127750137243972/?fref=ts"><span class="sr-only">Enlace a la página de Facebook</span><i class="fa fa-facebook"></i></a></li>
                                <li tabindex="3"><a href="https://twitter.com/"><span class="sr-only">Enlace a la página de Twitter</span><i class="fa fa-twitter"></i></a></li>
                                <li tabindex="4"><a href="https://plus.google.com/about?hl=es"><span class="sr-only">Enlace a la página de Google Plus</span><i class="fa fa-google-plus"></i></a></li>
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
                            <h1 tabindex="5"><img class="logo" src="../../../contenido/images/ShoesCoSmall.png" alt="Logotipo de Shoes&Co"></h1>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active" tabindex="6"><a href="../../../componentes/home/vista/index.php">Inicio</a></li>
                            <li tabindex="7"><a href="../../../componentes/catalogo/vista/catalogo.php">Catálogo</a></li>
                            <li tabindex="8"><a href="../../../componentes/sobrenosotros/vista/sobrenosotros.php">Sobre nosotros</a></li>
                            <li tabindex="9"><a href="../../../componentes/contacto/vista/contacto.php">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header><!--/#header-->
        <section id="home-slider">
            <div class="container">
                <div class="row">
                    <div class="main-slider">
                        <div class="slide-text" >
                            <h1 id="titulo1" tabindex="10">El arte de hacer calzado</h1>
                            <p tabindex="11">Nuestro producto tiene el sello especial de la mano de nuestros artesanos, que siempre piensan en la comodidad y la calidad que ofrecemos a nuestros clientes.</p>
                        </div>
                        <img class="slider-hill" src="../../../contenido/images/home/imagenInicio1.png" alt="Imagen de manufacturación de calzado" tabindex="12">
                    </div>
                </div>
            </div>
            <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
        </section> <!--/#home-slider-->
        <section id="home-slider-right">
            <div class="container">
                <div class="row">
                    <div class="main-slider">
                        <img class="slider-hill" src="../../../contenido/images/home/imagenInicio2.png" alt="Imagen alusiva al diseño de calzado" tabindex="13">
                        <div class="slide-text">
                            <h1 tabindex="14">Lo mejor en diseño</h1>
                            <p tabindex="15">Pensando en la mujer contemporánea, nuestro equipo de diseño, crea colecciones innovadoras tomando como referencia las últimas tendencias a nivel mundial.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
        </section>        
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info bottom informacion-footer" tabindex="16">
                            <h2>Contacto</h2>
                            <address>
                                E-mail: <a href="mailto:shoesco.footwear@gmail.com"
                                           >shoesco.footwear@gmail.com</a> <br> 
                                Teléfono: +57 (031) 551 72 53 <br> 
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info bottom informacion-footer" tabindex="17">
                            <h2>Dirección</h2>
                            <address>
                                Cra 24G # 20-04 sur <br> 
                                Barrio Restrepo <br> 
                                Bogotá, D.C. <br> 
                                Colombia 
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-info bottom informacion-footer" tabindex="18">
                            <h2>Declaración de conformidad</h2>
                            <p>Este sitio web cumple con el nivel de conformidad AA 
                                de acuerdo a la declaración de la norma WCAG 2.0 de 
                                la WAI (Web Accesibility Initiative).</p> 
                            <div>
                                <a href="http://www.w3.org/WAI/WCAG1AA-Conformance"
                                   title="Explicación del Nivel Doble-A de Conformidad">
                                    <img height="32" width="88" 
                                         src="http://www.w3.org/WAI/wcag1AA-blue"
                                         alt="Icono de conformidad con el Nivel Doble-A"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="copyright-text text-center" tabindex="19">
                            <p>&copy; Shoes & Co Footwear 2017. Derechos reservados.</p>
                            <p>Desarrollado por <span>Diego Galeano, Laura Prada</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> <!--/#footer-->
    </body>
</html>
