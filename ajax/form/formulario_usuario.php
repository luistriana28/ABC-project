<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="../img/usuarios.png" class="img-responsive img-thumbnail">
        </div>
        <div class="col-md-8">
            <div class="page-header">
              <h3>Registro de Usuarios</h3>
            </div>
            <form role="form" id="form_usuarios">
                <div class="row">
                    <input type="hidden" id="id_usuarios" name="id">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="user">Username: </label>
                    <input class="col-sm-8" type="text" id="user_usuarios" placeholder="Usuario" required="true" name="user">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="password">Password: </label>
                    <input class="col-sm-8" type="password" id="password_usuarios" placeholder="Password" required="true" name="password">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="tipo">Tipo: </label>
                    <select class="selectpicker" data-live-search="true" id="tipos_usuarios" name="tipos" data-width="auto">
                    	<option value="Administrativos">Administrativos</option>
                    	<option value="Usuario">Usuario</option>
                    </select>
                </div>
            </form>  
        </div>
    </div>
</div>
