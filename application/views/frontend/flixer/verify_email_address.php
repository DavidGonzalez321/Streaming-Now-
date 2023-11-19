<?php echo $this->session->userdata('is_instructor'); ?>
<section class="category-course-list-area" style="margin-top: 50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 login-form">
                      <div class="content-title-box">
                          <h4><?php echo $page_title; ?></h4>
                          <div class="title"><?php echo get_phrase('Ingresa el codigo de tu correo electrónico'); ?></div>
                          <div class="subtitle"><?php echo get_phrase('déjanos saber que esta dirección de correo electrónico te pertenece'); ?> <?php echo get_phrase('Ingrese el código del correo electrónico enviado a el').' '.$this->session->userdata('Correo electrónico registrado'); ?>.</div>
                      </div>
                      <form action="javascript:;" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="login-email"><?php echo get_phrase('Codigo de verificación'); ?>:</label>
                                      <input type="text" class="form-control" id = "verification_code" required>
                                      <a href="javascript:;" class="text-left p-3" id="resend_mail_button" onclick="resend_verification_code()" style="width: 100%;">
                                        <div class="float-left"><?= get_phrase('Reenviar correo') ?></div>
                                        <div id="resend_mail_loader" class="float-left pl-2"></div>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <a href="javascript:;" onclick="continue_verify()" class="btn btn-danger"><?php echo get_phrase('Continuar'); ?></a>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
  function continue_verify() {
    var email = '<?= $this->session->userdata('register_email'); ?>';
    var verification_code = $('#verification_code').val();
    $.ajax({
      type: 'post',
      url: '<?php echo base_url('index.php?home/verify_email_address/'); ?>',
      data: {verification_code : verification_code, email : email},
      success: function(response){
        if(response){
          window.location.replace('<?= base_url('index.php?home/redirect_after_signup'); ?>');
        }else{
          location.reload();
        }
      }
    });
  }
  
  function resend_verification_code() {
    $("#resend_mail_loader").html('<img src="<?= base_url('assets/global/page-loader-3.gif'); ?>" style="width: 25px;">');
    var email = '<?= $this->session->userdata('register_email'); ?>';
    $.ajax({
      type: 'post',
      url: '<?php echo base_url('index.php?home/resend_verification_code/'); ?>',
      data: {email : email},
      success: function(response){
        toastr.success('<?php echo get_phrase('mail_successfully_sent_to_your_inbox');?>');
        $("#resend_mail_loader").html('');
      }
    });
  }
</script>
