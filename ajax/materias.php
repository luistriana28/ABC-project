<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_materias">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_materias').tablaHermes({
            // URL DE EL SCRIPT
            urls: '../script/materias.php',
            // COLUMNAS DE LA TABLA DE LA BD
            col: [
                    { "data": "id" },
                    { "data": "nombre" },
                    { "data": "descripcion" }
                ],
            // NOMBRE A MOSTRAR DE LA TABLA
            nombre_tabla: 'Carreras',
            // URL DE EL FORMULARIO
            url_form: '../ajax/form/formulario_materias.php',
            // ID DEL FORMULARIO
            form_id: 'form_materias',
            // URL DE AKI (PAGINA)
            urls_page: '../ajax/materias.php',
            // NAME DEL INPUT
            // TYPE DEL INPUT
            // ID DEL INPUT
            // DEL FORMULARIO
            names: [
                    {"name":    "id",           "type": "text",     "ids": "id_materias"},
                    {"name":    "nombre",       "type": "text",     "ids": "nombre_materias"},
                    {"name":    "descripcion",  "type": "text",     "ids": "descripcion_materias"}
                ]
        });
    });
</script>