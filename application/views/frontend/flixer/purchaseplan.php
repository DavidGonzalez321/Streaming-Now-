<?php include 'header_browse.php';?>
<style>
table{
	background-color: rgb(243, 243, 243);
}
.isDisabled {
	color: currentColor;
	cursor: not-allowed;
	opacity: 0.5;
	text-decoration: none;
}
</style>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="black_text">Compra de Suscripción</h3>
			<hr>
		</div>
		<div class="col-lg-8">
			<h4 class="black_text">Compre cualquiera de los paquetes de membresía a continuación.</h4>
			<ul class="black_text">
				<li>
				Seleccione cualquiera de sus paquetes de membresía preferidos y realice el pago.
				</li>
				<li>
					Puedes cancelarla en cualquier momento luego.
				</li>
			</ul>
			<table class="table table-striped table-hover" style="color: #000;">
				<tbody>
					<tr style="background: linear-gradient(to right, yellow, orange, red );">
						<td style="background-color: #000;">
							<h6>Paquete de Suscripciones</h6>
						</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center" >
								<h5 style="text-transform: uppercase;"><?php echo $row['name'];?></h5>
							</td>
						<?php endforeach;?>
					</tr>
					<tr>
						<td>Precios mensueales</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"> <?php echo currency($row['price']);?></td>
						<?php endforeach;?>
					</tr>
					<tr style="background-color: #fff;">
						<td>Pantallas simultaneas para reproducir contenido</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><?php echo $row['screens'];?></td>
						<?php endforeach;?>
					</tr>
					<tr>
						<td>Disfruta desde tu laptop, TV, Teléfono y Tablet</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
						<?php endforeach;?>
					</tr>
					<tr style="background-color: #fff;">
						<td>Resolución HD</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
						<?php endforeach;?>
					</tr>
					<tr>
						<td>Catálogo completo</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
						<?php endforeach;?>
					</tr>
					<tr style="background-color: #fff;">
						<td>Cancela cuando quieras</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
						<?php endforeach;?>
					</tr>
					<tr>
						<td></td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center">
								<input type="radio" name="plan_id" value="<?php echo $row['plan_id'];?>" />
							</td>
						<?php endforeach;?>
					</tr>
				</tbody>
			</table>
			<div class="pull-right">
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default">Volver a atrás</a>
				<a href="javascript:" class="btn btn-primary" id="checkoutButton" onclick="checkPlan()">Verificar compra</a>


				
			</div>
		</div>
		<script>
		function checkPlan() {
			var selectedPlanId = $('input[name=plan_id]:checked').val();
			if (selectedPlanId > 0) {
				var redirectionUrl = "<?php echo base_url('index.php?browse/checkout/');?>" + selectedPlanId;
				window.location = redirectionUrl;
			}else{
				alert('<?php echo get_phrase('Tienes que seleccionar al menos un plan'); ?>');
			}
		}
		</script>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>
