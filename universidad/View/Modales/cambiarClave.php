 <!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2>Nueva Contraseña</h2>
      </div>
      <div class="row">
          <div class="item form-group col-md-11 col-sm-11 col-xs-11">
            <label for="password" class="control-label col-md-3 col-sm-3">Contraseña</label>
            <div class="item col-md-8 col-sm-8">
              <input type="password" data-validate-length="" id="password" required="required" class="form-control"   name="password">
            </div>
          </div>
          <div class="item form-group col-md-11 col-sm-11 col-xs-11">
            <label for="password2" class="control-label col-md-3 col-sm-3">Repetir contraseña</label>
            <div class="item col-md-8 col-sm-8">
              <input type="password" id="password2" data-validate-linked="password" required="required" class="form-control"   name="password2">
          </div>
        </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default col-md-3" data-dismiss="modal">CANCELAR</button>
        <div type="button" class="col-md-6" ><a id="guardar" class="btn btn-primary col-md-5" >GUARDAR</a></div>
      </div>
    </div>
  </div>
</div>