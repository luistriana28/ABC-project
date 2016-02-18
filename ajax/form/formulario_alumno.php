<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="../img/alumnos.png" class="img-responsive img-thumbnail">
        </div>
        <div class="col-md-8">
            <div class="page-header">
              <h3>Registro de Alumnos</h3>
            </div>
            <form role="form" id="form_alumnos">
                <div class="row">
                    <input type="hidden" id="id_alumno" name="id">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="nombre">Nombre </label>
                    <input class="col-sm-8" type="text" id="nombre_alumno" placeholder="Nombre" required="true" name="nombre">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="a_paterno">Apellido Paterno: </label>
                    <input class="col-sm-8" type="text" id="a_paterno_alumno" placeholder="Apellido Paterno" required="true" name="a_paterno">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="a_materno">Apellido Paterno: </label>
                    <input class="col-sm-8" type="text" id="a_materno_alumno" placeholder="Apellido Materno" required="true" name="a_materno">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="matricula">Matricula: </label>
                    <input class="col-sm-8" type="text" id="matricula_alumno" placeholder="Matricula" required="true" name="matricula">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="usuario">Usuario: </label>
                    <select class="selectpicker" data-live-search="true" id="usuario_alumno" name="usuario" data-width="auto">
                    </select>
                </div>
                <div class="row">
                    <label class="col-sm-4" for="grupo">Grupo: </label>
                    <select class="selectpicker" data-live-search="true" id="grupo_alumno" name="grupo" data-width="auto">
                    </select>
                </div>
            </form>  
        </div>
    </div>
</div>
