<?php
  $db_file_write_perm = is_writable('application/config/database.php');
  $routes_file_write_perm = is_writable('application/config/routes.php');
  $curl_enabled = function_exists('curl_version');
  if ($db_file_write_perm == false || $routes_file_write_perm == false || $curl_enabled == false) {
    $valid = false;
  } else {
    $valid = true;
  }
?>
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
            Realizamos un diagnóstico en su servidor. 
            Revise los elementos que tienen una marca roja. 
            Si todo está verde, estás listo para pasar al siguiente paso.
            </p>
            <br>
            <p style="font-size: 14px;">
              <?php if ($db_file_write_perm == true) { ?>
                <i class="dripicons-checkmark" style="color: #5ac52d;"></i>
              <?php } else { ?>
                <i class="dripicons-cross" style="color: #f12828"></i>
              <?php } ?>
              <strong>application/config/database.php </strong>: El archivo puede sobreescribirse
            </p>
            <p style="font-size: 14px;">
              <?php if ($routes_file_write_perm == true) { ?>
                <i class="dripicons-checkmark" style="color: #5ac52d;"></i>
              <?php } else { ?>
                <i class="dripicons-cross" style="color: #f12828"></i>
              <?php } ?>
              <strong>application/config/routes.php </strong>: El archivo puede sobreescribirse
            </p>
            <p style="font-size: 14px;">
              <?php if ($curl_enabled == true) { ?>
                <i class="dripicons-checkmark" style="color: #5ac52d;"></i>
              <?php } else { ?>
                <i class="dripicons-cross" style="color: #f12828"></i>
              <?php } ?>
              <strong>Curl: Activado</strong>
            </p>
            <p style="font-size: 14px;">
              <strong>Para continuar con el proceso de instalación, es necesario verificar todos los requisitos anteriores.</strong>
            </p>
            <br>
            <?php if ($valid == true) { ?>
              <p>
                <?php if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1') { ?>
                  <a href="<?php echo site_url('index.php?install/step3');?>" class="btn btn-info">
                    Continuar
                  </a>
                <?php } else { ?>
                  <a href="<?php echo site_url('index.php?install/step2');?>" class="btn btn-info">
                    Continuar
                  </a>
                <?php } ?>
              </p>
            <?php } ?>

            <?php if ($valid != true) { ?>
              <p>
                <?php if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1') { ?>
                  <a href="<?php echo site_url('index.php?install/step3');?>" class="btn btn-info" disabled>
                    Continuar
                  </a>
                <?php } else { ?>
                  <a href="<?php echo site_url('index.php?install/step2');?>" class="btn btn-info" disabled>
                    Continuar
                  </a>
                <?php } ?>
                <a href="<?php echo site_url('index.php?install/step1');?>" class="btn btn-info" >
                  <i class="mdi mdi-refresh"></i>Recargar
                </a>
              </p>
            <?php } ?>
    			</div>
    		</div>
      </div>
    </div>
  </div>
</div>
