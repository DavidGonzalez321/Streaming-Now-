<?php if(get_settings('recaptcha')): ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>

<!-- TOP LANDING SECTION -->
<div style="background-repeat: no-repeat;background-size: cover; background-position: center; clear: both;background-image: url(<?php echo base_url().'assets/frontend/flixer/images/fondo-lading.jpg';?>)">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px; width: 160px;height: 160px; float: left;margin: 18px;background-size: cover; border-radius:50%;" />
		</a>
	</div>
	
	<div style="float: right;margin: 18px 18px; height: 45px; " class="hidden-xs">
		<a style="padding: 15px; height:50px; width: 180px; border-radius: 25px" href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger"><?php echo get_phrase('Iniciar sesión');?></a>
	</div>

	<div class="row">
		<div class="col-lg-4 col-lg-offset-4" style="clear: both;">
			<div style="background-color: #f3f3f3; padding: 30px;">
				<?php 
					if ($this->session->flashdata('signin_result') == 'failed'):
					?>
				<div class="row">
		<!-- ERROR MESSAGE SHOWING IF DUPLICATE EMAIL FOUND -->
		<?php 
			if ($this->session->flashdata('signup_result') == 'failed'):
			?>
		<div class="alert alert-dismissible alert-danger" style="margin: 30px;">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo get_phrase('Correo ya registrado! Prueba con uno diferente, o inicia sesión');?>.
		</div>
		<?php endif;?>
		<div class="col-lg-12" style="margin: 0px 20px;">
			
		</div>
	</div>
				<?php endif;?>
				<form method="post" action="<?php echo base_url();?>index.php?home/signup">
				<h3 class="black_text"><?php echo get_phrase('Crear Cuenta');?></h3>
				<h4 class="black_text"><?php echo get_phrase('Estas a un paso de empezar a disfurtar');?></h4>

				<div style="margin:10px 0px 5px;" class="black_text">
					<?php echo get_phrase('Correo');?>
				</div>
				<div class="black_text">
					<input type="email" name="email" style="padding: 10px; max-width: 400px; width: 100%;" autocomplete="off" />
				</div>
				<div style="margin:10px 0px 5px;" class="black_text">
					<?php echo get_phrase('Contraseña');?>
				</div>
				<div class="black_text">
					<input type="password" name="password" style="padding: 10px; max-width: 400px; width: 100%;" />
				</div>
				<?php if(get_settings('recaptcha')): ?>
                    <div class="form-group" style="margin:10px 0px 5px;">
                      <div class="g-recaptcha" data-sitekey="<?php echo get_settings('recaptcha_sitekey'); ?>"></div>
                    </div>
                <?php endif; ?>
				<button type="submit"  class="btn btn-primary" style=" max-width: 150px; width: 100%; margin: 20px 0px;">
					<?php echo get_phrase('Registrate ahora');?></button>
			</form>
			</div>
		</div>
	</div>
	<!-- MIDDLE TAB SECTION -->
<div class="container" style="width:100%; margin-top: 50px;background-color:#000000">
	<?php include 'footer.php';?>
</div>
</div>
