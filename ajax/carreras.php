<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_carreras">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Fundacion</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Fundacion</th>
                        <th>Descripcion</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_carreras').tablaHermes({
            // URL DE EL SCRIPT
            urls: '../script/carreras.php',
            // COLUMNAS DE LA TABLA DE LA BD
            col: [
                    { "data": "id" },
                    { "data": "nombre" },
                    { "data": "fundacion" },
                    { "data": "descripcion" }
                ],
            // NOMBRE A MOSTRAR DE LA TABLA
            nombre_tabla: 'Carreras',
            // URL DE EL FORMULARIO
            url_form: '../ajax/form/formulario_carrera.php',
            // ID DEL FORMULARIO
            form_id: 'form_carreras',
            // URL DE AKI (PAGINA)
            urls_page: '../ajax/carreras.php',
            // NAME DEL INPUT
            // TYPE DEL INPUT
            // ID DEL INPUT
            // DEL FORMULARIO
            names: [
                    {"name":    "id",           "type": "text",     "ids":      "id_carreras"},
                    {"name":    "nombre",       "type": "text",     "ids":      "nombre_carreras"},
                    {"name":    "fundacion",    "type": "date",     "ids":      "fundacion_carreras"},
                    {"name":    "descripcion",  "type": "text",     "ids":      "descripcion_carreras"}
                ]
        });
    });
</script>