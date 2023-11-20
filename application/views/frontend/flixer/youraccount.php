		
<div style="height:100vh;width:100%; clear: both;background-repeat: no-repeat;background-size: cover; background-position: center; clear: both;background-image: url(<?php echo base_url().'assets/frontend/flixer/images/fondo-lading.jpg';?>) ">
	
<?php include 'header_browse.php';?>

<div class="container" style="background-color: #f3f3f3; padding:30px">
<div class="row">
		<div class="col-lg-12">
			<h3 style="color: #243af2"><?php echo get_phrase('Cuenta');?></h3>
			<hr>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-5">
					<span style="font-size: 20px;"><?php echo get_phrase('Membresia y facturación');?></span>
					<br>
					<?php
						if ( $this->crud_model->validate_subscription() == false):
						?>
					<a href="<?php echo base_url();?>index.php?browse/purchaseplan" 
						class="btn btn-primary" style="margin:10px 0px;"> 
							<?php echo get_phrase('Comprar membresia');?> </a>
					<?php endif;?>
					<?php
						if ( $this->crud_model->validate_subscription() != false):
						?>
					<a href="<?php echo base_url();?>index.php?browse/cancelplan" 
						class="btn btn-default" style="margin:10px 0px;"> 
							<?php echo get_phrase('Cancelar membresia');?> </a>
					<?php endif;?>
				</div>
				<div class="col-lg-7">
					<div class="row" style="margin: 5px;">
						<div class="pull-left">
							<b><?php echo $this->crud_model->get_current_user_detail()->email;?></b>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/emailchange" class="blue_text">
								<?php echo get_phrase('Cambiar correo');?></a>
						</div>
					</div>
					<div class="row" style="margin: 5px;">
						<div class="pull-left">
							<?php echo get_phrase('Password');?> : ******</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/passwordchange" class="blue_text">
								<?php echo get_phrase('Cambiar contraseña');?></a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-5">
					<span style="font-size: 20px;">
						<?php echo get_phrase('Detalle de los planes');?></span>
					<br>
				</div>
				<div class="col-lg-7">
					<div class="row" style="margin: 5px;">
						<div class="pull-left">
							<!-- IF ANY ACTIVE SUBSCRIPTION IS FOUND -->
							<?php
								if ( $this->crud_model->validate_subscription() != false):
									$current_plan_id			=	$this->crud_model->get_current_plan_id();
									$current_plan_name			=	$this->db->get_where('plan', array('plan_id'=> $current_plan_id))->row()->name;
									$current_plan_screens		=	$this->db->get_where('plan', array('plan_id'=> $current_plan_id))->row()->screens;
									$current_subscription_upto_timestamp
																=	$this->db->get_where('subscription', array('plan_id'=> $current_plan_id))->row()->timestamp_to;
								?>
							<b class="black_text" style="text-transform: capitalize;">
							<?php echo $current_plan_name . " (" . $current_plan_screens . " screens)"; ?>
							</b>
							<br>
								<?php echo get_phrase('Efectiva hasta: ');?> : 
								<b><?php echo date('d M, Y', $current_subscription_upto_timestamp);?></b>
							<br>
							<i style="font-size: 12px;">for changing plan, cancel the currently running plan first</i>
							<?php endif;?>
							<!-- IF ANY ACTIVE SUBSCRIPTION IS NOT FOUND -->
							<?php
								if ( $this->crud_model->validate_subscription() == false):
								?>
							<i style="font-size: 12px;"><?php echo get_phrase('Membresia inactiva');?></i>
							<?php endif;?>
						</div>
						<div class="pull-right" style="text-align: right;">
							<?php
								if ( $this->crud_model->validate_subscription() == false):
								?>
							<a href="<?php echo base_url();?>index.php?browse/purchaseplan" class="blue_text">
								<?php echo get_phrase('Comprar');?></a>
							<?php endif;?>
							<?php
								if ( $this->crud_model->validate_subscription() != false):
								?>
							<a href="<?php echo base_url();?>index.php?browse/cancelplan" class="blue_text">
								<?php echo get_phrase('Cancelar');?></a>
							<?php endif;?>
							<br>
							<a href="<?php echo base_url();?>index.php?browse/billinghistory" class="blue_text">
								<?php echo get_phrase('Historial de facturación');?></a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-5">
					<span style="font-size: 20px;">
						<?php echo get_phrase('Mi perfil');?></span>
					<br>
				</div>
				<div class="col-lg-7">
					<div class="row" style="margin: 5px;">
						<div class="pull-left black_text">
						
							<?php
							if (isset($active_user)) :
								// $bar_text & $bar_thumb is coming from header_browser.php, if they are available only.
								?>
							
								<img src="<?php echo base_url();?>assets/global/<?php echo $bar_thumb;?>" style="margin:10px 10px 10px 0px; height: 30px;" />
									<?php echo $bar_text;?>
								<br>
								
							<?php endif;?>
							
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/manageprofile" class="blue_text">
								<?php echo get_phrase('Administrar perfiles');?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
</div><?php include 'footer.php';?>
		</div>



			</div>


		
	


		</div>

