<?php if(get_settings('recaptcha')): ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>

<!-- TOP LANDING SECTION -->
<div style="height:100vh;width:100%; clear: both; background-image: url(<?php echo base_url().'assets/frontend/'.$selected_theme;?>/images/R.jpeg)">
	<div style="width:100%; height:90px; background-color:#000000; border-bottom:solid 1px #dcdde0;">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="height:60px;width:60px; float: left;margin-left: -6px; margin-top: -15px;background-color:#000;background-size: cover; border-radius:50%;"
		</a>
	</div>
	<div style="float: right;margin: 18px 40px; height: 50px;">
		<a href="<?php echo base_url();?>index.php?home/signin" class="" style="color: #e50914;font-weight: 700;font-size: 20px;"><?= get_phrase('Iniciar sesión'); ?></a>
	</div>
	<?php if(addon_status('blog')): ?>
		<div style="float: right;margin: 18px 40px; height: 50px;">
			<a href="<?php echo base_url();?>index.php?addons/blog" class="" style="color: #e50914;font-weight: 700;font-size: 20px;"><?= get_phrase('Comunidad web'); ?></a>
		</div>
	<?php endif; ?>
</div>
<!-- ERROR MESSAGE -->
<style>
	td{padding: 12px 15px; border-bottom: 1px solid #ccc;}
</style>
<div class="container">
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
		<div class="col-lg-12" style="margin: 0px 0px;">
			<h3 class="black_text"><?php echo get_phrase('Crear Cuenta');?></h3>
		</div>
		<div class="col-lg-12" style="margin: 0px 20px;">
			<h4 class="black_text"><?php echo get_phrase('Estas a un paso de empezar a disfurtar');?>:</h4>
		</div>
		<div class="col-lg-12" style="margin: 0px 20px;">
			<form method="post" action="<?php echo base_url();?>index.php?home/signup">
				<div style="margin:10px 0px 5px;">
					<?php echo get_phrase('Correo');?>
				</div>
				<div class="black_text">
					<input type="email" name="email" style="padding: 10px; max-width: 400px; width: 100%;" autocomplete="off" />
				</div>
				<div style="margin:10px 0px 5px;">
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
	<hr>
	<?php include 'footer.php';?>
	</div>
	</div>