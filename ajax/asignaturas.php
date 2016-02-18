<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_asignaturas">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Materia</th>
                        <th>Grupo</th>
                        <th>Profesor</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Materia</th>
                        <th>Grupo</th>
                        <th>Profesor</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_asignaturas').tablaHermes({
            urls: '../script/asignaturas.php',
            col: [
                    { "data": "id" },
                    { "data": "materia" },
                    { "data": "grupo"},
                    { "data": "profesor"}
                ],
            nombre_tabla: 'asignaturas',
            url_form: '../ajax/form/formulario_asignatura.php',
            form_id: 'form_asignaturas',
            urls_page: '../ajax/asignaturas.php',
            names: [
                    {"name":    "id",			"type": "text",		   "ids":      "id_asignaturas"},
                    {"name":    "materia",      "type": "select",      "ids":      "materia_asignaturas"},
                    {"name":    "grupo",        "type": "select",	   "ids":      "grupo_asignaturas"},
                    {"name":    "profesor",	    "type": "select",      "ids":      "profesor_asignaturas"}
                ]
        });
    });
</script>