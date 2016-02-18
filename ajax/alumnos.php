<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_alumnos">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Matricula</th>
                        <th>Usuario</th>
                        <th>Grupo</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Matricula</th>
                        <th>Usuario</th>
                        <th>Grupo</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_alumnos').tablaHermes({
            urls: '../script/alumnos.php',
            col: [
                    { "data": "id" },
                    { "data": "nombre" },
                    { "data": "matricula"},
                    { "data": "usuario"},
                    { "data": "grupo"}
                ],
            nombre_tabla: 'Alumnos',
            url_form: '../ajax/form/formulario_alumno.php',
            form_id: 'form_alumnos',
            urls_page: '../ajax/alumnos.php',
            names: [
                    {"name":    "id",			"type": "text",		"ids":      "id_alumnos"},
                    {"name":    "nombre",       "type": "text",     "ids":      "nombre_alumno"},
                    {"name":    "a_paterno",    "type": "text",	    "ids":      "a_paterno_alumno"},
                    {"name":    "a_materno",	"type": "text",     "ids":      "a_materno_alumno"},
                    {"name":    "matricula",    "type": "text",     "ids":      "matricula_alumno"},
                    {"name":    "usuario",      "type": "select",   "ids":      "usuario_alumno"},
                    {"name":    "grupo",        "type": "select",   "ids":      "grupo_alumno"},
                ]
        });
    });
</script>