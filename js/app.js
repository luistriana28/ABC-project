$(document).ready( function(){
    // HOME
    menu('../ajax/home.php','pag_home');
    menu('../ajax/carreras.php','pag_reg_carreras');
    menu('../ajax/grupos.php','pag_reg_grupos');
    menu('../ajax/usuarios.php','pag_rep_usuarios');
    menu('../ajax/alumnos.php','pag_rep_alumno');
    menu('../ajax/profesores.php','pag_rep_profesor');
    menu('../ajax/materias.php','pag_rep_materias');
    menu('../ajax/unidades.php','pag_rep_unidades');
    menu('../ajax/criterios.php','pag_rep_criterios');
    menu('../ajax/calificaciones.php','pag_rep_calificaciones');
    menu('../ajax/asignaturas.php','pag_rep_asignaturas');
    menu_colapse('menu_plus','menu_sidebar');

});

function login(){
    $.ajax({
        url: 'script/LogRespuesta.php',
        type: 'POST',
        dataType: 'JSON',
        data: $('#validaUsuario').serialize(),
        success: function(Datos){
            switch(Datos){
                case null:{
                    alert("Usuario No Valido");
                    $('input').val('');
                    break;
                }
                case true:{
                    window.location=Datos;
                    break;
                }
                default:
                {
                    window.location=Datos;
                    break;
                }
            }
        }
    });
}

function menu(urls,id){
    $('#'+id+'').click( function(){
       $.ajax({
           url: urls,
           success: function(data){
               $('#area_trabajo').html(data);
           }
       });
    }); 
}


function menu_colapse(btn_menu,menu){
    $('#'+btn_menu+'').click(function (e){
        $('#'+menu+'').toggle( "slide", function(){
            if($('#'+menu+'').css('display') == 'none'){
                $('#principal').removeClass("col-sm-offset-3");
                $('#principal').removeClass("col-md-offset-2");
                $('#principal').removeClass("col-md-10");
                $('#principal').addClass("col-md-12");
            };
            if($('#'+menu+'').css('display') == 'block'){
                $('#principal').removeClass("col-md-12");
                $('#principal').addClass("col-md-10");
                $('#principal').addClass("col-sm-offset-3");
                $('#principal').addClass("col-md-offset-2");
            };
        });  
    });
}



