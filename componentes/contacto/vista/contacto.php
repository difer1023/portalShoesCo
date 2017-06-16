<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Contacto | Shoes&Co</title>

        <link href="css/prettyPhoto.css" rel="stylesheet"> 
        <?php
        include_once "../../../componentes/layout/header.php";
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        ?>
        
    </head>

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
                            <li><a href="../../../componentes/sobrenosotros/vista/sobrenosotros.php">Sobre nosotros</a></li>
                            <li class="active"><a href="../../../componentes/contacto/vista/contacto.php">Contacto</a></li>                 
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
                                <h1 class="title">Contacto</h1>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/#action-->

        <section id="map-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="gmap"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="page-breadcrumb">
                            <h2>Envía tu mensaje</h2>
                            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Nombre" aria-label="Nombre">
                                    <label for="name" class="sr-only">Nombre</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required="required" placeholder="E-mail" aria-label="E-mail">
                                    <label for="email" class="sr-only">E-mail</label>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Escribe tu mensaje" aria-label="Mensaje"></textarea>
                                    <label for="message" class="sr-only">Mensaje</label>
                                </div>            
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-submit" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
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

        <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBNi5OnkD1EPDudLXDXkR5hHesZW1WDCqY"></script>
        <script type="text/javascript" src="../../../contenido/js/gmaps.js"></script>

    </body>
</html>
