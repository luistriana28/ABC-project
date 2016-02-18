<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="../img/grupos.png" class="img-responsive img-thumbnail">
        </div>
        <div class="col-md-8">
            <div class="page-header">
              <h3>Registro de Grupos</h3>
            </div>
            <form role="form" id="form_grupos">
                <div class="row">
                    <input type="hidden" id="id_grupos" name="id">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="nombre">Nombre: </label>
                    <input class="col-sm-8" type="text" id="nombre_grupos" placeholder="Introduce tu Nombre" required="true" name="nombre">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="turno">Turno: </label>
                    <input class="col-sm-8" type="text" id="turno_grupos" placeholder="Introduce el Turno" required="true" name="turno">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="carrera">Carrera: </label>
                    <select class="selectpicker" data-live-search="true" id="carrera_grupos" name="carrera" data-width="auto"></select>
                </div>
            </form>  
        </div>
    </div>
</div>