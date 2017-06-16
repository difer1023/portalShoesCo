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

    </head><!--/head-->

    <body>
        <header id="header">      
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 overflow">
                        <div class="social-icons pull-right">
                            <ul class="nav nav-pills">
                                <li><a href="https://www.facebook.com/ShoesCo-Footwear-1127750137243972/?fref=ts"><span class="sr-only">Enlace a la página de Facebook</span><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><span class="sr-only">Enlace a la página de Twitter</span><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/about?hl=es"><span class="sr-only">Enlace a la página de Google Plus</span><i class="fa fa-google-plus"></i></a></li>
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

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                <img src="../../../contenido/images/home/icon1.png" alt="Imagen alusiva a la misión de la empresa">
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
                                <img src="../../../contenido/images/home/icon2.png" alt="Imagen alusiva a la visión de la empresa">
                            </div>
                            <h2>Visión</h2>
                            <p>Para el año 2020 nos consolidaremos como una de las compañías más reconocidas en la industria del 
                                calzado a nivel nacional, con una capacidad de producción aumentada y una infraestructura propia; mejorando nuestros procesos, prácticas
                                y estrategias para lograr el posicionamiento de la marca y la apertura hacia mercados nacionales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#services-->
        <footer id="footer">
            <div class="container">
                <div class="row">
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
                        <div class="copyright-text text-center">
                            <p>&copy; Shoes & Co Footwear 2017. Derechos reservados.</p>
                            <p>Desarrollado por <span>Diego Galeano, Laura Prada</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->

        <script type="text/javascript" src="/contenido/js/jquery.countTo.js"></script>  

    </body>
</html>
