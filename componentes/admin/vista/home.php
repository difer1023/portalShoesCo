<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShoesCo - Administracion</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<link href="../../../contenido/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../../../contenido/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../../contenido/css/animate.min.css" rel="stylesheet" type="text/css" />
<link href="../../../contenido/css/admin/admin.css" rel="stylesheet" type="text/css" />
<link href="../../../contenido/css/admin/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!--<link href="plugins/kalendar/kalendar.css" rel="stylesheet">-->
<link rel="stylesheet" href="../../../contenido/plugins/scroll/nanoscroller.css">
<link href="../../../contenido/plugins/morris/morris.css" rel="stylesheet" />
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
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\--><div class="left_nav">

      <!--\\\\\\\left_nav start \\\\\\-->
      
      <div class="left_nav_slidebar">
        <ul>
          <li><a href="javascript:void(0);"><i class="fa fa-edit"></i> EMPRESA <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="index.html"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Informacion General</b> </a> </li>
              <li> <a href="animations.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Informacion contacto</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-shopping-cart"></i> PRODUCTOS <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="adminCatalogo.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Catálogo</b> </a> </li>
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
          <h1>HOME</h1>
          
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="row">
          <div class="col-sm-3 col-sm-6">
            <div class="information green_info">   
              <div class="information_inner">
              	<div class="info green_symbols"><i class="glyphicon glyphicon-comment icon"></i></div>
                <span>Información </span>
                <h2 class="bolded">General</h2>
                <div class="infoprogress_green">
                  <div class="greenprogress"></div>
                </div>
                <div class="pull-right" id="work-progress1">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-6">
            <div class="information blue_info">
              <div class="information_inner">
                  <div class="info blue_symbols"><a href="adminCatalogo.php"><i class="fa fa-shopping-cart icon"></i></a></div>
                <span>Administración</span>
                <h2 class="bolded">Catálogo</h2>
                <div class="infoprogress_blue">
                  <div class="blueprogress"></div>
                </div>
                <b class=""><small></small></b>
                <div class="pull-right" id="work-progress2">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-6">
            <div class="information red_info">
              <div class="information_inner">
              <div class="info red_symbols"><i class="fa fa-comments icon"></i></div>
                <span>Información</span>
                <h2 class="bolded">Contacto</h2>
                <div class="infoprogress_red">
                  <div class="redprogress"></div>
                </div>
                <b class=""><small></small></b>
                <div class="pull-right" id="work-progress3">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body"> content </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="../../../contenido/js/jquery.js"></script>
<script src="../../../contenido/js/bootstrap.min.js"></script>
<script src="../../../contenido/js/admin/common-script.js"></script>

<script src="../../../contenido/plugins/sparkline/jquery.customSelect.min.js" ></script> 

<script src="../../../contenido/plugins/morris/morris.min.js" type="text/javascript"></script> 
<script src="../../../contenido/plugins/morris/raphael-min.js" type="text/javascript"></script>  
<script src="../../../contenido/plugins/morris/morris-script.js"></script> 

<script src="plugins/demo-slider/demo-slider.js"></script>
<script src="plugins/knob/jquery.knob.min.js"></script> 

<script src="../../../contenido/js/admin/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>
<script src="../../../contenido/js/admin/jquery.slimscroll.min.js"></script>
<script src="plugins/scroll/jquery.nanoscroller.js"></script>
</body>
</html>

