<div class="row"
  style="margin-top: 30px;">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-body">
        <div class="panel panel-default" data-collapsed="0"
          style="border-color: #dedede;">
    			<!-- panel body -->
    			<div class="panel-body" style="font-size: 14px;">
            <h3>Completado!!</h3>
            <br>
            <p style="font-size: 14px;">
              <strong>La instalación fue sastifactoria! Por favor iniciar sesión..</strong>
            </p>
            <br>
            <table>
              <tbody>
                <tr>
                  <td style="padding: 12px;"><strong>Correo del Administrador: |</strong></td>
                  <td style="padding: 12px;"><?php echo $admin_email; ?></td>
                </tr>
                <tr>
                  <td style="padding: 12px;"><strong>Contraseña: |</strong></td>
                  <td style="padding: 12px;">Su contraseña elegida</td>
                </tr>
              </tbody>
            </table>
            <br>
            <p>
              <a href="<?php echo site_url('index.php?install/success/login');?>" class="btn btn-info">
                <i class="entypo-login"></i> &nbsp; Iniciar sesión
              </a>
            </p>
    			</div>
    		</div>
      </div>
    </div>
  </div>
</div>
