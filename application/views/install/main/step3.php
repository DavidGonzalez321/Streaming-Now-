<?php if(isset($error_con_fail)) { ?>
  <div class="row"
    style="margin-top: 20px;">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger">
        <strong><?php echo $error_con_fail; ?></strong>
      </div>
    </div>
  </div>
<?php } ?>
<?php if(isset($error_nodb)) { ?>
  <div class="row"
    style="margin-top: 20px;">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger">
        <strong><?php echo $error_nodb; ?></strong>
      </div>
    </div>
  </div>
<?php } ?>
<div class="row"
  style="margin-top: 30px;">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-body">
        <div class="panel panel-default" data-collapsed="0"
          style="border-color: #dedede;">
          <!-- panel body -->
          <div class="panel-body" style="font-size: 14px;">
            <p style="font-size: 14px;">
            A continuación debe ingresar los detalles de conexión de su base de datos. Si no está seguro acerca de esto, comuníquese con su anfitrión.
            </p>
            <br>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal form-groups" method="post"
                  action="<?php echo site_url('index.php?install/step3/configure_database');?>">
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Nombre de Base de Datos</label>
            				<div class="col-sm-5">
            					<input type="text" class="form-control" name="dbname" placeholder=""
                        required autofocus>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                    El nombre de la base de datos que desea utilizar con esta aplicación
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Nombre de Usuario</label>
            				<div class="col-sm-5">
            					<input type="text" class="form-control" name="username" placeholder=""
                        required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      El nombre de usuario de su Base de Datos
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Contraseña</label>
            				<div class="col-sm-5">
            					<input type="password" class="form-control" name="password" placeholder="">
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      La contraseña de su Base de Datos
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Database Host</label>
            				<div class="col-sm-5">
            					<input type="text" class="form-control" name="hostname" placeholder=""
                        required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                    Si 'localhost' no funciona, puede obtener el nombre de host del servidor web
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label"></label>
            				<div class="col-sm-7">
            					<button type="submit" class="btn btn-info">Continuar</button>
            				</div>
            			</div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
