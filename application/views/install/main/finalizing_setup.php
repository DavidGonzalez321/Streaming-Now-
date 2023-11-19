<div class="row"
  style="margin-top: 30px;">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-body">
        <div class="panel panel-default" data-collapsed="0"
          style="border-color: #dedede;">
          <!-- panel body -->
          <div class="panel-body" style="font-size: 14px;">
            <center>
              <i class="entypo-thumbs-up" style="font-size: 32px;"></i>
              <h3>¡¡Felicidades!! La instalación fue exitosa.</h3>
            </center>
            <br>
            <center>
              <strong>
              Antes de comenzar a utilizar su aplicación, hágala suya. Establezca el nombre y el título de su aplicación, el correo electrónico de inicio de sesión del administrador y la contraseña. Recuerde las credenciales de inicio de sesión que necesitará más adelante para iniciar sesión en su cuenta. Después de este paso, serás redirigido a la página de inicio de sesión de la aplicación.
              </strong>
            </center>
            <br>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal form-groups" method="post"
                  action="<?php echo site_url('index.php?install/finalizing_setup/setup_admin');?>">
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Nombre del Sistema</label>
            				<div class="col-sm-5">
            					<input type="text" class="form-control" name="system_name" placeholder=""
                        required autofocus>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      El nombre de su Aplicación
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Nombre del Administrador</label>
            				<div class="col-sm-5">
            					<input type="text" class="form-control" name="name" placeholder="" required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      Nombre completo del Administrador
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Correo del Administrador</label>
            				<div class="col-sm-5">
            					<input type="email" class="form-control" name="email" placeholder="" required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      Correo del Administrador para ingresar al Sistema
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label">Contraseña</label>
            				<div class="col-sm-5">
            					<input type="password" class="form-control" name="password" placeholder=""
                        required>
            				</div>
                    <div class="col-sm-4" style="font-size: 12px;">
                      Contraseña del Administrador para ingresar al sistema
                    </div>
            			</div>
                  <hr>
                  <div class="form-group">
            				<label class="col-sm-3 control-label"></label>
            				<div class="col-sm-7">
            					<button type="submit" class="btn btn-info">Finalizar la configuración</button>
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
