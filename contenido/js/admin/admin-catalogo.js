/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

////***********************************to do list *****************************
//	$('.task-finish').click(function()	{
//		if($(this).is(':checked'))	{
//			$(this).parent().parent().addClass('selected');					
//		}
//		else	{
//			$(this).parent().parent().removeClass('selected');
//		}
//	});
//	//***********************************End to do list *****************************
//	
//	//***********************************Delete to do list*****************************
//	$('.task-del').click(function()	{			
//		var activeList = $(this).parent().parent();
//
//		activeList.addClass('removed');
//				
//		setTimeout(function() {
//			activeList.remove();
//		}, 1000);
//			
//		return false;
//	});
//	//***********************************End Delete to do list *****************************
	
var numeroColecciones=0;
var colecciones;
var categorias;
var productos;
        
$(document).ready(function () {

    
    
    cargarCategorias();
    
    cargarColecciones();
    
    
    filtrarProductos({});


    var $filterCheckboxes = $('.filter-checkboxes');

    $filterCheckboxes.on('change', function () {

        var selectedFilters = {};

        $filterCheckboxes.filter(':checked').each(function () {

            if (!selectedFilters.hasOwnProperty(this.name)) {
                selectedFilters[ this.name ] = [];
            }
            selectedFilters[ this.name ].push(this.value);
        });
        
        filtrarProductos(selectedFilters);
        
    });


});


function cargarColecciones(){
    $.ajax({
        type: "POST",
        url: "../controladores/CtrlColecciones.php",
        async: false,
        data: {
                operacion: "consultarTodos"
            }
    })
            .done(function (data) {
                colecciones = $.parseJSON(data);
                numeroColecciones=colecciones.length+1;
                html = '';
                for (i = 0; i < colecciones.length; i++) {

                    html += '<li class="list-group-item green-light-bg-color">'
                            +'<label class="label-checkbox inline">'
                            + '<input class="filter-checkboxes" type="checkbox" id="checkbox' + i + '" name="coleccion" value="' + colecciones[i].i_codigo + '"/>'
                            +'<span class="custom-checkbox"></span> </label>'
                            + colecciones[i].c_nombre 
                            + '<span class="pull-right" onclick="modalEliminarColeccion('+ colecciones[i].i_codigo +')"><i class="fa fa-times"></i> </span> </li>';
                }

                $('#colecciones').html(html);
            })
            .fail(function () {
                alert('Error al cargar colecciones.');
            });
    
}
function cargarCategorias(){
    $.ajax({
        type: "POST",
        url: "../controladores/CtrlCategorias.php",
        async: false,
        data: {
                operacion: "consultarTodos"
            }
    })
            .done(function (data) {
                categorias = $.parseJSON(data);

                html = '';
                for (i = 0; i < categorias.length; i++) {
                    html += '<li class="list-group-item green-light-bg-color">'
                            +'<label class="label-checkbox inline">'
                            + '<input class="filter-checkboxes" type="checkbox" id="checkbox' + numeroColecciones+i + '" name="tipo" value="' + categorias[i].i_codigo + '"/></label>'
                            + categorias[i].c_nombre 
                            + '<span class="pull-right" onclick="modalEliminarCategoria('+categorias[i].i_codigo+')"><i class="fa fa-times"></i> </span> </li>';

                }

                $('#categorias').html(html);
            })
            .fail(function () {
                alert('Error al cargar categorias.');
            });
    
}

function filtrarProductos(filtros){
    $.ajax({
            type: "POST",
            url: "../controladores/CtrlFiltrosProductos.php",
            async: false,
            data: {
                filtros: JSON.stringify(filtros),
                operacion: "consultar"
            }
        })
                .done(function (data) {
                    console.log(data);
                    productos = $.parseJSON(data);
                    console.log(data, productos);
                    html = '';
                    for (i = 0; i < productos.length; i++) {
                        html += '<div class="col-sm-6 col-md-4">'
                                + '<div class="thumbnail">'
                                + '<img src="'+ productos[i].c_ruta_imagen + '" alt="'+productos[i].c_desc_imagen+'">'
                                + '<div class="caption">'
                                + '<h3>' + productos[i].c_nombre + '</h3>'
                                + '<p>' + productos[i].c_descripcion + '.</p>'
                                + '<p><span onclick="modalModificar(\'' + productos[i].i_codigo + '\')" class="btn btn-primary btn-space">Modificar</span>'
                                + '<span onclick="modalEliminar(\'' + productos[i].i_codigo + '\')" class="btn btn-danger btn-space">Eliminar</span></p>'
                                + '</div>'
                                + '</div>'
                                + '</div>';

                    }
                    if(productos.length===0){
                        html+='<span class="glyphicon glyphicon-exclamation-sign" alt="Signo de exclamacion"></span><span class="">No existen productos con el criterio de busqueda seleccionado</span>';
                    }
                    $('#divProductos').html(html);
                })
                .fail(function () {
                    alert('Error al cargar productos.');
                });
}

function addCollection(){
    $.ajax({
        type: "POST",
        url: "../controladores/CtrlColecciones.php",
        async: false,
        data: {
                operacion: "nuevo",
                nombre:$("#nombreColeccion").val()
            }
    })
            .done(function () {
                cargarColecciones();
    })
            .fail(function () {
                alert('Error al guardar coleccion.');
            });
    
}

function addCategory(){
    $.ajax({
        type: "POST",
        url: "../controladores/CtrlCategorias.php",
        async: false,
        data: {
                operacion: "nuevo",
                nombre:$("#nombreCategoria").val()
            }
    })
            .done(function () {
                cargarCategorias();
    })
            .fail(function () {
                alert('Error al guardar categoria.');
            });
    
}

function deleteCategory(codigo){
    $.ajax({
        type: "POST",
        url: "../controladores/CtrlCategorias.php",
        async: false,
        data: {
                operacion: "eliminar",
                codigo:codigo
            }
    })
            .done(function () {
                cargarCategorias();
    })
            .fail(function () {
                alert('Error al guardar categoria.');
            });
    
}

function deleteCollection(codigo){
    $.ajax({
        type: "POST",
        url: "../controladores/CtrlColecciones.php",
        async: false,
        data: {
                operacion: "eliminar",
                codigo:codigo
            }
    })
            .done(function () {
                cargarColecciones();
    })
            .fail(function () {
                alert('Error al eliminar coleccion.');
            });
    
}

function nuevoProducto(){
    $.ajax({
        type: "POST",
        url: "../controladores/CtrlProductos.php",
        async: false,
        data: {
                operacion: $("#operacion").val(),
                producto:JSON.stringify({
                nombre:$("#nombre").val(),
                descripcion:$("#descripcion").val(),
                coleccion:$("#coleccion").val(),
                categoria:$("#categoria").val(),
                rutaImagen:$("#rutaImagen").val(),
                descripcionImagen:$("#descripcionImagen").val(),
                tipoImagen:$("#tipoImagen").val(),
                codigoProducto:$("#codigoProducto").val()})
                
            }
        
    })
            .done(function () {
                filtrarProductos({});
                $("#modalProducto").modal("hide");
    })
            .fail(function () {
                alert('Error al insertar producto.');
            });
    
}

function modalNuevo(){
    $("#modalProducto").modal("show");
    llenarColecciones();
    llenarCategorias();
    $("#operacion").val("insertar");
}

function modalModificar(codigo){
    $("#modalProducto").modal("show");
    llenarColecciones();
    llenarCategorias();
    for (i = 0; i < productos.length; i++) {
        console.log(codigo+" "+productos[i].i_codigo);
        if(codigo===productos[i].i_codigo){
            console.log("llenandoForm");
            $("#codigoProducto").val(productos[i].i_codigo);
            $("#nombre").val(productos[i].c_nombre);
            $("#descripcion").val(productos[i].c_descripcion);
            $("#coleccion").val(productos[i].i_coleccion);
            $("#categoria").val(productos[i].i_tipo);
            $("#rutaImagen").val(productos[i].c_ruta_imagen);
            $("#descripcionImagen").val(productos[i].c_desc_imagen);
            $("#tipoImagen").val(productos[i].c_tipo_imagen);
            $(".image-preview-filename").val("imagen");
            var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        }); 
        img.attr('src', productos[i].c_ruta_imagen);
        $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        $(".image-preview-clear").show();
        }
                    }
    $("#operacion").val("modificar");
}

function modalEliminar(codigo){
    $("#modalEliminar").modal("show");
    $("#cuerpoEliminar").html("<p>¿Estás seguro de eliminar el producto seleccionado?</p>");
    $("#accion").val("eliminarProducto");
    $("#codigoEliminar").val(codigo);
}

function modalEliminarCategoria(codigo){
    $("#modalEliminar").modal("show");
    $("#cuerpoEliminar").html("<p>¿Estás seguro de eliminar la categoria?, Recuerda que se eliminaran los productos asociados a la misma.</p>");
    $("#accion").val("eliminarCategoria");
    $("#codigoEliminar").val(codigo);
}

function modalEliminarColeccion(codigo){
    $("#modalEliminar").modal("show");
    $("#cuerpoEliminar").html("<p>¿Estás seguro de eliminar la coleccion?, Recuerda que se eliminaran los productos asociados a la misma.</p>");
    $("#accion").val("eliminarColeccion");
    $("#codigoEliminar").val(codigo);
}

function eliminar(){
    if($("#accion").val()==="eliminarProducto"){
        $.ajax({
        type: "POST",
        url: "../controladores/CtrlProductos.php",
        async: false,
        data: {
                operacion: "eliminar",
                producto:JSON.stringify({
                codigoProducto:$("#codigoEliminar").val()})   
            }
        
    })
            .done(function () {
                filtrarProductos({});
                $("#modalEliminar").modal("hide");
    })
            .fail(function () {
                alert('Error al eliminar producto.');
            });
    }
    if($("#accion").val()==="eliminarCategoria"){
        $.ajax({
        type: "POST",
        url: "../controladores/CtrlCategorias.php",
        async: false,
        data: {
                operacion: "eliminar",
                codigo:$("#codigoEliminar").val()   
            }
        
    })
            .done(function () {
                   cargarCategorias();
                $("#modalEliminar").modal("hide");
    })
            .fail(function () {
                alert('Error al eliminar producto.');
            });
    }
    if($("#accion").val()==="eliminarColeccion"){
        $.ajax({
        type: "POST",
        url: "../controladores/CtrlColecciones.php",
        async: false,
        data: {
                operacion: "eliminar",
                codigo:$("#codigoEliminar").val()   
            }
        
    })
            .done(function () {
                cargarColecciones();
                $("#modalEliminar").modal("hide");
    })
            .fail(function () {
                alert('Error al eliminar producto.');
            });
    }
    
}

function llenarColecciones(){
    html = '';
                for (i = 0; i < colecciones.length; i++) {
                    html += '<option value="' + colecciones[i].i_codigo + '">'
                            + colecciones[i].c_nombre 
                            + '</option>';
                }
                
                $('#coleccion').html(html);
}
function llenarCategorias(){
    html = '';
                for (i = 0; i < categorias.length; i++) {
                    html += '<option value="' + categorias[i].i_codigo + '">'
                            + categorias[i].c_nombre 
                            + '</option>';

                }
                $('#categoria').html(html);
}