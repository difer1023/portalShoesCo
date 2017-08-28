<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ULTIMO Admin Dashboard Template</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
            <link href="../../../contenido/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
            <link href="../../../contenido/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="../../../contenido/css/animate.min.css" rel="stylesheet" type="text/css" />
            <link href="../../../contenido/css/admin/admin.css" rel="stylesheet" type="text/css" />
            <link href="../../../contenido/css/admin/image-preview.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="light_theme  fixed_header left_nav_fixed">
        <div class="wrapper">
            <!--\\\\\\\ wrapper Start \\\\\\-->
            <div class="header_bar">
                <!--\\\\\\\ header Start \\\\\\-->
                <div class="brand">
                    <!--\\\\\\\ brand Start \\\\\\-->
                    <div class="logo" style="display:block"><img src="../../../contenido/images/ShoesCo.png" width="100" height="52" alt="Logo ShoesCo" /></div>
                    <div class="small_logo" style="display:none"><img src="../../../contenido/images/ShoesCo.png" width="100" height="52" alt="Logo ShoesCo" /></div>
                </div>
                <!--\\\\\\\ brand end \\\\\\-->
                <div class="header_top_bar">
                    <!--\\\\\\\ header top bar start \\\\\\-->
                    <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>

                    <div class="top_right_bar">
                        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="../../../contenido/images/admin/user.png" /><span class="user_adminname">John Doe</span> <b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                <div class="top_pointer"></div>
                                <li> <a href="login.html"><i class="fa fa-power-off"></i> Logout</a> </li>
                            </ul>
                        </div>
                    </div>

                    <span class="add_user" onclick="modalNuevo()"> <i class="fa fa-plus-square"></i> <span> Nuevo producto</span> </span>
                </div>
                <!--\\\\\\\ header top bar end \\\\\\-->
            </div>
            <!--\\\\\\\ header end \\\\\\-->
            <div class="inner">
                <!--\\\\\\\ inner start \\\\\\-->
                <div class="left_nav">
                    <!--\\\\\\\left_nav start \\\\\\-->

                    <div class="left_nav_slidebar">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-edit"></i> EMPRESA <span class="plus"><i class="fa fa-plus"></i></span> </a>
                                <ul>
                                    <li> <a href="index.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Informacion General</b> </a> </li>
                                    <li> <a href="animations.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Informacion contacto</b> </a> </li>
                                </ul>
                            </li>
                            <li class="left_nav_active theme_border"> <a href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> PRODUCTOS <span class="plus"><i class="fa fa-plus"></i></span></a>
                                <ul class="opened" style="display:block">
                                    <li> <a href="general.html"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Catálogo</b> </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--\\\\\\\left_nav end \\\\\\-->
                <div class="contentpanel">
                    <!--\\\\\\\ contentpanel start\\\\\\-->
                    <div class="pull-left breadcrumb_admin clear_both">
                        <div class="pull-left page_title theme_color">
                            <h1>PRODUCTOS</h1>
                            <h2 class="">Catálogo</h2>
                        </div>
                        
                    </div>
                    <div class="container clear_both padding_fix">
                        <!--\\\\\\\ container  start \\\\\\-->

                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="block-web green-bg-color">
                                    <h3 class="content-header ">Colecciones</h3>
                                    <div class="porlets-content">
                                        <ul class="list-group task-list no-margin collapse in" id="colecciones">

                                        </ul>
                                        <form class="form-inline margin-top-10" role="form">
                                            <input type="text" class="form-control" placeholder="Nombre" id="nombreColeccion">
                                                <span class="btn btn-default btn-warning pull-right btn-sm" onclick="addCollection()"><i class="fa fa-plus"></i> Añadir coleccion</span>
                                        </form>
                                        <!-- /list-group -->
                                    </div>
                                    <!--/porlets-content-->
                                </div>

                                <div class="block-web green-bg-color">
                                    <h3 class="content-header ">Categorias</h3>
                                    <div class="porlets-content">
                                        <ul class="list-group task-list no-margin collapse in" id="categorias">

                                        </ul>
                                        <form class="form-inline margin-top-10" role="form">
                                            <input type="text" class="form-control" placeholder="Nombre" id="nombreCategoria">
                                                <span class="btn btn-default btn-warning pull-right btn-sm" onclick="addCategory()"><i class="fa fa-plus"></i>Añadir categoria</span>
                                        </form>
                                        <!-- /list-group -->
                                    </div>
                                    <!--/porlets-content-->
                                </div>
                                <!--/block-web-->
                            </div>
                            <div class="col-lg-8">
                                <section class="panel default blue_title h2">
                                    <div class="panel-heading"><span class="semi-bold">Productos</span> </div>	
                                    <div class="panel-body">


                                        <div class="row" id="divProductos">


                                        </div>

                                    </div>
                                </section>
                            </div>
                        </div>  
                    </div>
                    <!--\\\\\\\ container  end \\\\\\-->
                </div>
                <!--\\\\\\\ content panel end \\\\\\-->
            </div>
            <!--\\\\\\\ inner end\\\\\\-->
        </div>
        <!--\\\\\\\ wrapper end\\\\\\-->
        <!-- Modal -->
        <div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Nuevo producto</h4>
                    </div>
                    <div class="modal-body"> <form action="" class="form-horizontal row-border" id="formProducto">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Descripcion</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="descripcion"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Coleccion</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="coleccion" id="coleccion">
                                        <option value="AK"> Argentina </option>
                                        <option value="HI"> Aruba </option>
                                    </select>
                                </div><!--/col-sm-9--> 
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Categoria</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="categoria" id="categoria">
                                        <option value="AK"> Argentina </option>
                                        <option value="HI"> Aruba </option>
                                    </select>
                                </div><!--/col-sm-9--> 
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Imagen</label>
                                <div class="col-sm-9">
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                            <span class="input-group-btn">
                                                <!-- image-preview-clear button -->
                                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                    <span class="glyphicon glyphicon-remove"></span> Limpiar
                                                </button>
                                                <!-- image-preview-input -->
                                                <div class="btn btn-default image-preview-input">
                                                    <span class="glyphicon glyphicon-folder-open"></span>
                                                    <span class="image-preview-input-title">Buscar</span>
                                                    <input type="file" accept="image/png, image/jpeg, image/gif"/> <!-- rename it -->
                                                </div>
                                            </span>
                                    </div><!-- /input-group image-preview [TO HERE]--> 
                                </div>
                            </div>
                            <input type="hidden" name="rutaImagen" id="rutaImagen"/>
                            <input type="hidden" name="tipoImagen" id="tipoImagen"/>
                            <input type="hidden" name="operacion" id="operacion"/>
                            <input type="hidden" name="codigoProducto" id="codigoProducto"/>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Descripcion de imagen</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="descripcionImagen"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <input type="button" class="btn btn-primary" onclick="nuevoProducto()">Guardar</input>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
                    </div>
                    <div class="modal-body" id="cuerpoEliminar"> sgxdfgxfg </div>

                    <div class="modal-footer">
                        <input type="hidden" id="accion"/>
                        <input type="hidden" id="codigoEliminar"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="eliminar()">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar chats -->
        <nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
            <div class="header">
                <input type="text" class="form-control chat-search" placeholder=" Search">
            </div>
            <div href="#" class="sub-header">
                <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
            </div>
            <div class="content">
                <p class="title">Family</p>
                <ul class="nav nav-pills nav-stacked contacts">
                    <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
                    <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
                    <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
                    <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
                </ul>

                <p class="title">Friends</p>
                <ul class="nav nav-pills nav-stacked contacts">
                    <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
                    <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
                </ul>   

                <p class="title">Work</p>
                <ul class="nav nav-pills nav-stacked contacts">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
                </ul>

            </div>
            <div id="chat-box">
                <div class="header">
                    <span>Richard Avedon</span>
                    <a class="close"><i class="fa fa-times"></i></a>    </div>
                <div class="messages nano nscroller has-scrollbar">
                    <div class="content" tabindex="0" style="right: -17px;">
                        <ul class="conversation">
                            <li class="odd">
                                <p>Hi John, how are you?</p>
                            </li>
                            <li class="text-right">
                                <p>Hello I am also fine</p>
                            </li>
                            <li class="odd">
                                <p>Tell me what about you?</p>
                            </li>
                            <li class="text-right">
                                <p>Sorry, I'm late... see you</p>
                            </li>
                            <li class="odd unread">
                                <p>OK, call me later...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
                <div class="chat-input">
                    <div class="input-group">
                        <input type="text" placeholder="Enter a message..." class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button">Send</button>
                            </span>      </div>
                </div>
            </div>
        </nav>
        <!-- /sidebar chats -->   

        <script src="../../../contenido/js/jquery.js"></script>
        <script src="../../../contenido/js/bootstrap.min.js"></script>
        <script src="../../../contenido/js/admin/common-script.js"></script>
        <script src="../../../contenido/js/admin/jquery.slimscroll.min.js"></script>
        <script src="../../../contenido/js/admin/jPushMenu.js"></script> 
        <script src="../../../contenido/js/admin/image-preview.js"></script> 
        <script src="../../../contenido/js/admin/admin-catalogo.js"></script> 
        <!--<script src="js/side-chats.js"></script>-->


    </body>
</html>


