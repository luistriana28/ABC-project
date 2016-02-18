<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="../img/criterios.png" class="img-responsive img-thumbnail">
        </div>
        <div class="col-md-8">
            <div class="page-header">
              <h3>Registro de Criterios</h3>
            </div>
            <form role="form" id="form_criterios">
                <div class="row">
                    <input type="hidden" id="id_criterios" name="id">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="nombre">Nombre: </label>
                    <input class="col-sm-8" type="text" id="nombre_criterios" placeholder="Introduce tu Nombre" required="true" name="nombre">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="turno">Porcentaje: </label>
                    <input class="col-sm-8" type="number" id="porcentaje_criterios" placeholder="Introduce el Turno" required="true" name="porcentaje">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="carrera">Unidad: </label>
                    <select class="selectpicker" data-live-search="true" id="unidad_criterios" name="unidad" data-width="auto"></select>
                </div>
            </form>  
        </div>
    </div>
</div>