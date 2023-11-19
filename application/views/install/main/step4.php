<?php if(isset($error)) { ?>
  <div class="row"
    style="margin-top: 20px;">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger">
        <strong><?php echo $error; ?></strong>
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
              <strong>Su base de datos está conectada exitosamente.</strong> Todo lo que necesitas hacer ahora es
              <strong>presionar el botón "Instalar".</strong>.
              El instalador automático ejecutará un archivo SQL, hará todo el trabajo tedioso y configurará su aplicación automáticamente.
            </p>
            <br>
            <div class="row">
              <div class="col-md-12">
                <button type="button" id="install_button" class="btn btn-info">
                  <i class="entypo-check"></i> &nbsp; Instalar
                </button>
                <div id="loader" style="margin-top: 20px;">
                  &nbsp; Importando en su Base de Datos....
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#loader').hide();
    $('#install_button').click(function() {
      $('#loader').fadeIn();
      window.location.href = '<?php echo site_url('index.php?install/step4/confirm_install');?>';
    });
  });
</script>
