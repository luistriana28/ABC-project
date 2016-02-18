<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_grupos">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Turno</th>
                        <th>Carrera</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Turno</th>
                        <th>Carrera</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_grupos').tablaHermes({
            urls: '../script/grupos.php',
            col: [
                    { "data": "id" },
                    { "data": "nombre" },
                    { "data": "turno" },
                    { "data": "carrera" }
                ],
            nombre_tabla: 'Carreras',
            url_form: '../ajax/form/formulario_grupos.php',
            form_id: 'form_grupos',
            urls_page: '../ajax/grupos.php',
            names: [
                    {"name": "id",      "type": "text",     "ids" : "id_grupos" },
                    {"name": "nombre",  "type": "text",     "ids" : "nombre_grupos" },
                    {"name": "turno",   "type": "text",     "ids" : "turno_grupos" },
                    {"name": "carrera", "type": "select",   "ids" : "carrera_grupos" }
                ]
        });
    });
</script>