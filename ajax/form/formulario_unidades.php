<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="../img/unidades.png" class="img-responsive img-thumbnail">
        </div>
        <div class="col-md-8">
            <div class="page-header">
              <h3>Registro de Unidades</h3>
            </div>
            <form role="form" id="form_unidades">
                <div class="row">
                    <input type="hidden" id="id_unidades" name="id">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="numero">Numero: </label>
                    <input class="col-sm-8" type="number" id="numero_unidades" required="true" name="numero">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="nombre">Nombre: </label>
                    <input class="col-sm-8" type="text" id="nombre_unidades" placeholder="Introduce el Nombre" required="true" name="nombre">
                </div>
                <div class="row">
                    <label class="col-sm-4" for="materia">Materia: </label>
                    <select class="selectpicker" data-live-search="true" id="materia_unidades" name="materia" data-width="auto"></select>
                </div>
            </form>  
        </div>
    </div>
</div>