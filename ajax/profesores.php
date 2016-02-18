<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_profesores">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>RFC</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>RFC</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_profesores').tablaHermes({
            urls: '../script/profesores.php',
            col: [
                    { "data": "id" },
                    { "data": "rfc"},
                    { "data": "nombre" },
                    { "data": "usuario"}
                ],
            nombre_tabla: 'Profesores',
            url_form: '../ajax/form/formulario_profesor.php',
            form_id: 'form_profesores',
            urls_page: '../ajax/profesores.php',
            names: [
                    {"name":    "id",			"type": "text",		"ids":      "id_profesor"},
                    {"name":    "rfc",    		"type": "text",     "ids":      "rfc_profesor"},
                    {"name":    "nombre",       "type": "text",     "ids":      "nombre_profesor"},
                    {"name":    "a_paterno",    "type": "text",	    "ids":      "a_paterno_profesor"},
                    {"name":    "a_materno",	"type": "text",     "ids":      "a_materno_profesor"},
                    {"name":    "usuario",      "type": "select",   "ids":      "usuario_profesor"}
                ]
        });
    });
</script>