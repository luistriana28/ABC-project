<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="../img/profesores.png" class="img-responsive img-thumbnail">
        </div>
        <div class="col-md-8">
            <div class="page-header">
              <h3>Registro de Profesor</h3>
            </div>
            <form role="form" id="form_profesores">
                <div class="row">
                    <input type="hidden" id="id_profesor" name="id">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="rfc">RFC: </label>
                    <input class="col-sm-8" type="text" id="rfc_profesor" placeholder="RFC" required="true" name="rfc">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="nombre">Nombre </label>
                    <input class="col-sm-8" type="text" id="nombre_profesor" placeholder="Nombre" required="true" name="nombre">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="a_paterno">Apellido Paterno: </label>
                    <input class="col-sm-8" type="text" id="a_paterno_profesor" placeholder="Apellido Paterno" required="true" name="a_paterno">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="a_materno">Apellido Paterno: </label>
                    <input class="col-sm-8" type="text" id="a_materno_profesor" placeholder="Apellido Materno" required="true" name="a_materno">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="usuario">Usuario: </label>
                    <select class="selectpicker" data-live-search="true" id="usuario_profesor" name="usuario" data-width="auto">
                    </select>
                </div>
            </form>  
        </div>
    </div>
</div>
