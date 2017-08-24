/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




$(document).ready(function () {

    var numeroColecciones=0;
    $.ajax({
        type: "POST",
        url: "../controladores/CtrlColecciones.php",
        async: false
    })
            .done(function (data) {
                var colecciones = $.parseJSON(data);
                numeroColecciones=colecciones.length+1;
                html = '';
                for (i = 0; i < colecciones.length; i++) {

                    html += '<div class="form-control">'
                            + '<div class="filtro">'
                            + '<input class="filter-checkboxes" type="checkbox" id="checkbox' + i + '" name="coleccion" value="' + colecciones[i].i_codigo + '"/>'
                            + '<label for="checkbox' + i + '" id="cb1">' + colecciones[i].c_nombre + '</label>'
                            + '</div></div>';
                }

                $('#colecciones').html(html);
            })
            .fail(function () {
                alert('Error al cargar colecciones.');
            });

    $.ajax({
        type: "POST",
        url: "../controladores/CtrlCategorias.php",
        async: false,
    })
            .done(function (data) {
                var categorias = $.parseJSON(data);

                html = '';
                for (i = 0; i < categorias.length; i++) {
                    html += '<div class="form-control">'
                            + '<div class="filtro">'
                            + '<input class="filter-checkboxes" type="checkbox" id="checkbox' + numeroColecciones+i + '" name="tipo" value="' + categorias[i].i_codigo + '"/>'
                            + '<label for="checkbox' + numeroColecciones+i + '" id="cb1">' + categorias[i].c_nombre + '</label>'
                            + '</div></div>';

                }

                $('#categorias').html(html);
            })
            .fail(function () {
                alert('Error al cargar categorias.');
            });


    $.ajax({
        type: "POST",
        url: "../controladores/CtrlFiltrosProductos.php",
        async: false,
        data: {
            filtros: JSON.stringify({})
        }
    })
            .done(function (data) {
                var productos = $.parseJSON(data);
                console.log(data, productos);
                html = '';
                for (i = 0; i < productos.length; i++) {
                    html += '<div class="col-sm-4 col-lg-4 col-md-4">'
                                + '<div class="thumbnail">'
                                + '<img src="../../../contenido/' + productos[i].c_ruta_imagen + '" alt="'+productos[i].c_desc_imagen+'">'
                                + '<div class="caption">'
                                + '<h4>' + productos[i].c_nombre + '</h4>'
                                + '<p>' + productos[i].c_descripcion + '.</p>'
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


    var $filterCheckboxes = $('.filter-checkboxes');

    $filterCheckboxes.on('change', function () {

        var selectedFilters = {};

        $filterCheckboxes.filter(':checked').each(function () {

            if (!selectedFilters.hasOwnProperty(this.name)) {
                selectedFilters[ this.name ] = [];
            }
            selectedFilters[ this.name ].push(this.value);
        });

        $.ajax({
            type: "POST",
            url: "../controladores/CtrlFiltrosProductos.php",
            async: false,
            data: {
                filtros: JSON.stringify(selectedFilters)
            }
        })
                .done(function (data) {
                    var productos = $.parseJSON(data);
                    console.log(data, productos);
                    html = '';
                    for (i = 0; i < productos.length; i++) {
                        html += '<div class="col-sm-4 col-lg-4 col-md-4">'
                                + '<div class="thumbnail">'
                                + '<img src="../../../contenido/' + productos[i].c_ruta_imagen + '">'
                                + '<div class="caption">'
                                + '<h4>' + productos[i].c_nombre + '</h4>'
                                + '<p>' + productos[i].c_descripcion + '.</p>'
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
    });


});