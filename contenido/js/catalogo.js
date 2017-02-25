/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var $filterCheckboxes = $( '.filter-checkboxes' );

$filterCheckboxes.on( 'change', function() {

  var selectedFilters = {};

  $filterCheckboxes.filter( ':checked' ).each( function() {

    if ( ! selectedFilters.hasOwnProperty( this.name ) ) {
      selectedFilters[ this.name ] = [];
    }
    selectedFilters[ this.name ].push( this.value );
  } );
  
  $.ajax({
                type: "POST",
                url: "../controladores/CtrlFiltrosProductos.php",
                async: false,
                data: {
                    filtros:JSON.stringify(selectedFilters)
                }
            })
                    .done(function(data) {
                        var productos = $.parseJSON(data);
                        console.log(data,productos);
                        html = '';
                        for (i = 0; i < productos.length; i++) {
                           html += '<div class="col-sm-4 col-lg-4 col-md-4">'
                                   +'<div class="thumbnail">'
                                   +'<img src="../../../contenido/' +productos[i].c_ruta_imagen+'"<div class="caption">'
                                   +'<h4><a href=\"#\">'+productos[i].c_nombre+ '</a></h4>'
                                   +'<p>' +productos[i].c_descripcion+ '</a>.</p>'
                                   +'</div>'
                                   +' </div>';
                            
                        }

                        $('#divProductos').html(html);
                    })
                    .fail(function() {
                        alert('Error al cargar productos.');
                    });
  
//alert(JSON.stringify(selectedFilters));
} );