<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_usuarios">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Tipo</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_usuarios').tablaHermes({
            urls: '../script/usuarios.php',
            col: [
                    { "data": "id" },
                    { "data": "user" },
                    { "data": "password" },
                    { "data": "tipos" }
                ],
            nombre_tabla: 'Usuarios',
            url_form: '../ajax/form/formulario_usuario.php',
            form_id: 'form_usuarios',
            urls_page: '../ajax/usuarios.php',
            names: [
                    {"name":    "id",			"type": "text",		"ids":      "id_usuarios"},
                    {"name":    "user",       	"type": "text",     "ids":      "user_usuarios"},
                    {"name":    "password",    	"type": "password",	"ids":      "password_usuarios"},
                    {"name":    "tipos",	  	"type": "option",   "ids":  	"tipos_usuarios"}
                ]
        });
    });
</script>