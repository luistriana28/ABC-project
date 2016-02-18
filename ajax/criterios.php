<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_criterios">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Porcentaje</th>
                        <th>Unidad</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Porcentaje</th>
                        <th>Unidad</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_criterios').tablaHermes({
            urls: '../script/criterios.php',
            col: [
                    { "data": "id" },
                    { "data": "nombre" },
                    { "data": "porcentaje" },
                    { "data": "unidad" }
                ],
            nombre_tabla: 'Carreras',
            url_form: '../ajax/form/formulario_criterios.php',
            form_id: 'form_criterios',
            urls_page: '../ajax/criterios.php',
            names: [
                    {"name": "id",      "type": "text",     "ids" : "id_criterios" },
                    {"name": "nombre",  "type": "text",     "ids" : "nombre_criterios" },
                    {"name": "porcentaje",   "type": "text",     "ids" : "porcentaje_criterios" },
                    {"name": "unidad", "type": "select",   "ids" : "unidad_criterios" }
                ]
        });
    });
</script>