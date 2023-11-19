<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<?php
			if ($this->session->flashdata('status') == 'password_change_failed'):
			?>
		<!-- ERROR MESSAGE --> 
		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo get_phrase('La contraseña actual es incorrecta o la nueva contraseña debe tener al menos 6 caracteres. Inténtalo de nuevo.');?>
		</div>
		<?php endif;?>
		<div class="col-lg-12">
			<h3 class="black_text"><?php echo get_phrase('Cambiar contraseña');?></h3>
			<hr>
		</div>
		<div class="col-lg-5">
			<form method="post" action="<?php echo base_url();?>index.php?browse/passwordchange">
				<div class="">
					<?php echo get_phrase('Contraseña actual');?>
				</div>
				<div class="black_text">
					<input type="password" name="old_password" style="padding: 10px; width:100%;" />
				</div>
				<div class="" style="margin-top: 20px;">
					<?php echo get_phrase('Nueva contraseña');?>
				</div>
				<div class="black_text">
					<input type="password" name="new_password" style="padding: 10px; width:100%;" />
				</div>
				<br>
				<button class="btn btn-primary" type="submit"> <?php echo get_phrase('Guardar');?> </button>
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default"><?php echo get_phrase('Cancelar');?></a>
			</form>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>