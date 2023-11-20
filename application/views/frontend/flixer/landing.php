<!-- TOP LANDING SECTION -->
<div style="height:93vh;width:100%;background-image: url(<?php echo base_url().'assets/frontend/flixer/images/fondo-lading.jpg';?>)">
	<!-- logo -->
	<div style="float: left;margin: 18px; border-radius:50%;">
		<a href="<?php echo base_url();?>index.php?home">
		
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px; width: 160px;height: 160px; " />
		</a>
		</div>
	<div style="float: right;margin: 18px 18px; height: 45px; " class="hidden-xs">
		<a style="padding: 15px; height:50px; width: 180px; border-radius: 25px" href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger"><?php echo get_phrase('Iniciar sesión');?></a>
	</div>
	<?php if(addon_status('blog')): ?>
		<div style="float: right;margin: 18px 18px; height: 50px;" class="hidden-xs">
			<a href="<?php echo base_url();?>index.php?addons/blog" class="btn btn-danger"><?php echo get_phrase('Blog');?></a>
		</div>
	<?php endif; ?>
	
	<!-- promo text visible for large devices -->
	<div style="font-size: 85px;font-weight: bold;clear: both;padding: 80px 0px 0px 0px; text-align:center; " class="hidden-xs">
		<div style=" font-family: sans-serif;font-size:7rem; color:   #fff    ;  "><?php echo get_phrase('La magia del cine a tu alcance');?></div>
		<div style=" font-family: sans-serif;font-size:4rem; color:   #fff  ; ">
			<?php echo get_phrase('DISFRUTA DONDE SEA.');?> <?php echo get_phrase('Y EN CUALQUIER MOMENTO.');?>
		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg"
			style=" margin:10px ; font-size: 30px;">
			<?php echo get_phrase('Únete hoy y disfruta de un mes gratis.');?>
			<i class="fa fa-angle-right" style="margin:0px 0px 0px 20px;"></i>
		</a>
	</div>
	
	<!-- promo text visible for small devices -->
	<div style="font-size: 45px;font-weight: bold;clear: both;padding: 80px 0px 0px 0px; text-align:center; color: #fff;" class="hidden-lg hidden-sm hidden-md">
	 <?php echo get_phrase('La magia del cine a tu alcance');?>
		<div style="font-size: 25px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			<?php echo get_phrase('DISFRUTA DONDE SEA.');?> <br> <?php echo get_phrase('Y EN CUALQUIER MOMENTO.');?>
		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" style=" margin:10px ; font-size: 30px;" ><?php echo get_phrase('Únete hoy y disfruta de un mes gratis.');?></a>
		<br>
	</div>
</div>
<!-- MIDDLE TAB SECTION -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="bs-component">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#cancel" data-toggle="tab">
						<i class="fa fa-sign-out" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						<?php echo get_phrase('Cancela tu suscripción en cualquier momento');?>
						</a>
					</li>
					<li>
						<a href="#anywhere" data-toggle="tab">
						<i class="fa fa-laptop" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						<?php echo get_phrase('Ve desde donde quieras');?>
						</a>
					</li>
					<li>
						<a href="#price" data-toggle="tab">
						<i class="fa fa-tags fa-flip-horizontal" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						<?php echo get_phrase('Precios de la suscripción');?>
						</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active in" id="cancel">
						<p>
						<div class="row">
							<div class="col-md-7" style="padding-top: 50px;">
								<h4>
									<?php echo get_phrase('Si Cine Lumiere no es para ti, no hay problema');?> 
									<br>
									<?php echo get_phrase('Cancela en cualquier momento.');?>
								</h4>
								<br>
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >
									<?php echo get_phrase('Únete hoy');?></a>
							</div>
							<div class="col-md-5">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_cancelanytime_withdevice.png" style="width: 100%;" />
							</div>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="anywhere">
						<p>
						<div class="row">
							<div class="col-md-9">
								<h4>
									<?php echo get_phrase('Ve tus series y peliculas desde donde sea. En cualquier dispositivo.');?>
								</h4>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >
									<?php echo get_phrase('Únete hoy');?></a>
							</div>
						</div>
						<div class="row" style="margin-top:50px;text-align: center;">
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_TV_UI.png" style="width: 100%;" />
								<h5><?php echo get_phrase('Mira en tu TV');?></h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_mobile_tablet_UI_2.png" style="width: 100%;" />
								<h5><?php echo get_phrase('Mira en tu teléfono, tablet');?></h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_website_UI.png" style="width: 100%;" />
								<h5><?php echo get_phrase('Mira en tu PC');?></h5>
							</div>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="price">
						<p>
						<div class="row" style="margin: 35px;">
							<div class="col-md-8" style="text-align: right;">
								<h4>
									<?php echo get_phrase('Elige una suscripción y mira todo nuestro contenido');?>
								</h4>
							</div>
							<div class="col-md-4" style="text-align: left;">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >
									<?php echo get_phrase('Únete hoy');?></a>
							</div>
						</div>
						<!-- price table -->
						<table class="table table-striped table-hover" style="color: #999;">
							<tbody>
								<tr>
									<td></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center">
										<h5 style="text-transform: uppercase;"><?php echo $row['name'];?></h5>
									</td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Precio mensual');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center">USD <?php echo $row['price'];?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Pantallas en simultaneo');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><?php echo $row['screens'];?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Mira en tu PC, Laptop, Tablet');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Disponible resolución HD');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Peliculas y series ilimitadas');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Cancela en cualquier momento');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
							</tbody>
						</table>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</div>