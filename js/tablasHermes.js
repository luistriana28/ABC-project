(function ($) {
    $.fn.tablaHermes = function (opciones) {

        var configuracion = $.extend({
            urls            : null,
            col             : null,
            nombre_tabla    : null,
            url_form        : null,
            form_id         : null,
            urls_page       : null,
            names           : null
        }, opciones);

        return this.each(function () {

            var id_tabla = this.id;
            var urls = configuracion.urls;
            var col = configuracion.col;
            var nombre_tabla = configuracion.nombre_tabla;
            var url_form = configuracion.url_form;
            var form_id = configuracion.form_id;
            var urls_page = configuracion.urls_page;
            var names = configuracion.names;

            var tabla = $('#'+id_tabla+'').DataTable({
                "dom": 'T<"clear">rfltip',
                "tableTools": {
                    "sSwfPath": "../plugins/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                    "sRowSelect": "single",
                    "aButtons": [
                        {
                            "sExtends":    "collection",
                            "sButtonText": "Exportar",
                            "aButtons": [
                                {
                                    "sExtends": "csv",
                                    "sButtonText": "Excel"
                                },
                                {
                                    "sExtends": "pdf",
                                    "sButtonText": "PDF"
                                }
                            ]
                        }
                    ]
                },
                "ajax": ""+urls+"",
                "columns": col,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron nada lo sentimos ",
                    "info": "Mostrando Pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No se encontraron datos disponibles",
                    "emptyTable":     "La Tabla contiene datos disponible",
                    "infoFiltered":   "(Filtrar de _MAX_ registros)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ registros",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "search":         "Buscar:",
                    "zeroRecords":    "No se encontro ningun resultado",
                    "paginate": {
                        "first":      "Filtrar",
                        "last":       "Ultimo",
                        "next":       "Siguiente",
                        "previous":   "Previo"
                    }
                },
            });
            $('#ToolTables_'+id_tabla+'_0').removeClass('btn btn-default');
            $('#ToolTables_'+id_tabla+'_0').addClass('btn btn-inverse');
            $('#'+id_tabla+'_wrapper > .DTTT').append('<input type="button" class="btn btn-inverse" id="ToolTables_'+id_tabla+'_2" aria-controls="'+id_tabla+'" data-toggle="modal" data-target="#myModal'+id_tabla+'" value="Agregar">');
            $('#'+id_tabla+'_wrapper > .DTTT').append('<input type="button" class="btn btn-inverse" id="ToolTables_'+id_tabla+'_3" aria-controls="'+id_tabla+'" data-toggle="modal" data-target="#myModal'+id_tabla+'" disabled="true" value="Editar">');
            $('#'+id_tabla+'_wrapper > .DTTT').append('<input type="button" class="btn btn-danger" id="ToolTables_'+id_tabla+'_4"  aria-controls="'+id_tabla+'" disabled="true" value="Eliminar">');

            // AGREGAR
            $('#'+id_tabla+'_wrapper').on('click','#ToolTables_'+id_tabla+'_2',function(){
                $('#myModal'+id_tabla+'').remove();
                $('#'+id_tabla+'').append(
                    '<div class="modal fade" id="myModal'+id_tabla+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'+
                        '<div class="modal-dialog modal-lg">'+
                            '<div class="modal-content">'+
                                '<div class="modal-header">'+
                                    '<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>'+
                                    '<h4 class="modal-title">'+nombre_tabla+'</h4>'+
                                '</div>'+
                                '<div class="modal-body" id="body_modal'+id_tabla+'">'+

                                '</div>'+
                                '<div class="modal-footer">'+
                                    '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'+
                                    '<input type="button" id="save_'+id_tabla+'" class="btn btn-primary" value="Agregar">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>');
                    
                $.ajax({
                    url: url_form,
                    success: function(data){
                        $('#body_modal'+id_tabla+'').html(data);
                        $.each(names, function(i, item) {
                            if (item.type == "option") {
                                $('#'+item.ids+'').selectpicker('refresh');
                            };
                        });
                    }
                });
                
                $('#myModal'+id_tabla+'').on('click', '#save_'+id_tabla+'', function(){
                    var datos_form = $( "#"+form_id+"" ).serializeArray();
                    datos_form.push({name: 'Accion', value: 'Insertar'});
                    $.ajax({
                        url: urls,
                        type: 'POST',
                        dataType: 'JSON',
                        data: datos_form,
                        success: function(Datos){
                            $('#'+form_id+' input').val('');
                            $('#myModal'+id_tabla+'').modal('toggle');
                            tabla.ajax.reload();
                        }
                    });
                });
                $.each(names, function(i, item) {
                    if (item.type == "select") {
                        var datos_form = [{ name:   'Accion', value:  'Select' },
                                          { name:   'Campo',  value:  item.name }];
                        $.ajax({
                            url: urls,
                            type: 'POST',
                            dataType: 'JSON',
                            data: datos_form,
                            success: function(Datos7){
                                $('#'+item.ids+'').append('<option value="null">Seleciona Uno</option>');
                                $.each(Datos7, function(a, dat) {
                                    $('#'+item.ids+'').append('<option value="'+dat.value+'">'+dat.option+'</option>');
                                });
                                $('#'+item.ids+'').selectpicker();
                            }
                        });
                    };
                });        
            });

            // EDITAR
            $('#'+id_tabla+'_wrapper').on('click','#ToolTables_'+id_tabla+'_3',function(){
                $('#myModal'+id_tabla+'').remove();
                $('#'+id_tabla+'').append(
                    '<div class="modal fade" id="myModal'+id_tabla+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'+
                        '<div class="modal-dialog modal-lg">'+
                            '<div class="modal-content">'+
                                '<div class="modal-header">'+
                                    '<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>'+
                                    '<h4 class="modal-title">'+nombre_tabla+'</h4>'+
                                '</div>'+
                                '<div class="modal-body" id="body_modal'+id_tabla+'">'+

                                '</div>'+
                                '<div class="modal-footer">'+
                                    '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'+
                                    '<input type="button" id="save_'+id_tabla+'" class="btn btn-primary" value="Editar">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>');

                $.ajax({
                    url: url_form,
                    success: function(data){
                        $('#body_modal'+id_tabla+'').html(data);
                    }
                });

                $('#myModal'+id_tabla+'').on('shown.bs.modal', function () {
                    $('#'+id_tabla+' tbody .active').each(function(index1){
                        var id;
                        $(this).children('td').each(function(index2){
                            switch (index2){
                                case 0: 
                                    id = $(this).text();
                                break;
                            }
                        });
                        var datos_form = [
                            { name: 'id', value: id },
                            { name: 'Accion', value: 'Buscar' }];
                        $.ajax({
                            url: urls,
                            type: 'POST',
                            dataType: 'JSON',
                            data: datos_form,
                            success: function(Datos3){
                                $.each(names, function(i, item) {
                                    if (item.type == "select") {
                                        var datos_form = [{ name:   'Accion', value:  'Select' },
                                                          { name:   'Campo',  value:  item.name }];
                                        $.ajax({
                                            url: urls,
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: datos_form,
                                            success: function(Datos7){
                                                $('#'+item.ids+'').append('<option value="null">Seleciona Uno</option>');
                                                $.each(Datos7, function(a, dat) {
                                                    $('#'+item.ids+'').append('<option value="'+dat.value+'">'+dat.option+'</option>');
                                                });
                                                $('#'+item.ids+'').selectpicker();
                                                $('#'+item.ids+'').selectpicker('val', Datos3.data.variables[''+item.name+'']);
                                            }
                                        });
                                    } else if(item.type == "option"){
                                        $('#'+item.ids+'').selectpicker();
                                        $('#'+item.ids+'').selectpicker('val', Datos3.data.variables[''+item.name+'']);
                                    } else{
                                        $('#'+item.ids+'').val(Datos3.data.variables[''+item.name+'']);
                                    }; 
                                    
                                });
                            }
                        });
                    });
                });
                
                $('#myModal'+id_tabla+'').on('click', '#save_'+id_tabla+'', function(){
                    var datos_form = $( "#"+form_id+"" ).serializeArray();
                    datos_form.push({name: 'Accion', value: 'Actualizar'});
                    $.ajax({
                        url: urls,
                        type: 'POST',
                        dataType: 'JSON',
                        data: datos_form,
                        success: function(Datos){
                            $('#'+form_id+' input').val('');
                            $('#myModal'+id_tabla+'').modal('toggle');
                            tabla.ajax.reload();
                            $('#ToolTables_'+id_tabla+'_2').prop("disabled" , false);
                            $('#ToolTables_'+id_tabla+'_3').prop("disabled" , true);
                            $('#ToolTables_'+id_tabla+'_4').prop("disabled" , true);
                        }
                    });
                });
            });

            //ELIMINAR
            $('#'+id_tabla+'_wrapper').on('click','#ToolTables_'+id_tabla+'_4',function(){
                $('#'+id_tabla+' tbody .active').each(function(index6){
                    var id;
                    $(this).children('td').each(function(index2){
                        switch (index2){
                            case 0: 
                                id = $(this).text();
                            break;
                        }
                    });
                    var datos_form = [
                        { name: 'id', value: id },
                        { name: 'Accion', value: 'Eliminar' }];
                    $.ajax({
                        url: urls,
                        type: 'POST',
                        dataType: 'JSON',
                        data: datos_form,
                        success: function(Datos5){
                            tabla.ajax.reload();
                            $('#ToolTables_'+id_tabla+'_2').prop("disabled" , false);
                            $('#ToolTables_'+id_tabla+'_3').prop("disabled" , true);
                            $('#ToolTables_'+id_tabla+'_4').prop("disabled" , true);
                        }
                    });
                });
            });
           
            // ACTIVACION DE LOS BOTONES
            $('#'+id_tabla+'').on('click', 'tr', function(){
                if ($(this).hasClass('active')) {
                    $('#ToolTables_'+id_tabla+'_2').prop("disabled" , true);
                    $('#ToolTables_'+id_tabla+'_3').prop("disabled" , false);
                    $('#ToolTables_'+id_tabla+'_4').prop("disabled" , false);
                } else{
                    $('#ToolTables_'+id_tabla+'_2').prop("disabled" , false);
                    $('#ToolTables_'+id_tabla+'_3').prop("disabled" , true);
                    $('#ToolTables_'+id_tabla+'_4').prop("disabled" , true);
                }; 
            }); 
        });
    }
}(jQuery))