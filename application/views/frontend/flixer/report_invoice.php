<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Creativeitem" />
    <meta name="author" content="Creativeitem" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Print</title>
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/global/favicon.png">
	<!-- third party css -->
	<link href="<?php echo base_url('assets/backend/css/vendor/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/css/vendor/dataTables.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/css/vendor/responsive.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/css/vendor/buttons.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/css/vendor/select.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
	<!-- third party css end -->
	<!-- App css -->
	<link href="<?php echo base_url('assets/backend/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/backend/css/app.min.css') ?>" rel="stylesheet" type="text/css" />

</head>

<body>
	<div class="row">
		<div class="col-sm-12 col-md-1 col-lg-1 px-5"></div>
	    <div class="col-sm-12 col-md-10 col-lg-10 px-5 mt-5">
	        <div class="card">
	            <div class="card-body">
	            	<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6 pt-3 pb-2">
							<img src="<?php echo base_url();?>assets/global/logo.png" height="30px;" />
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6 pt-3 pb-2">
							<h4 class="header-title float-right text-success">Historial de suscripciones</h4>
						</div>
					</div>
	            	
	            	<table width="100%">

							<?php
								$subscription	=	$this->db->get_where('subscription', array('subscription_id' => $subscription_id))->row_array();
								$plan_id = $subscription['plan_id'];
						    	$plan = $this->db->get_where('plan', array('plan_id' => $plan_id))->row_array();

								$user	=	$this->db->get_where('user', array('user_id' => $user_id))->row_array();
						    ?>
							

									<tr>
										<td>
											<div class="mt-0 pt-0 float-top"><b><?php echo get_phrase('Hola'); ?>, <?php echo $user['name']; ?></b></div><br>
											<div class="" style="opacity: .5;"><?php echo get_phrase('A continuación encontrará un desglose de costos del trabajo reciente completado.'); ?></div>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
										</td>
										<td>
											<div class="w-50 float-left">
												<div class=""><b><?php echo get_phrase('Tu plan'); ?>:</b></div><br>
												<div class=""><b><?php echo get_phrase('Fecha de pago'); ?>:</b></div><br>
												<div class=""><b><?php echo get_phrase('Periodo del servicio'); ?>:</b></div><br>
												<br>
												<div class=""><b><?php echo get_phrase('Método de pago'); ?>:</b></div><br>
											</div>
											<div class="w-50 float-left">
												<div class=""><?php echo $plan['name']; ?></div><br>
												<div class=""><?php echo date('d M Y', $subscription['payment_timestamp']); ?></div><br>
												<div class=""><?php echo date('d M Y', $subscription['timestamp_from']); ?> - <?php echo date('d M Y', $subscription['timestamp_to']); ?></div><br>
												<div class="badge badge-light"><?php echo $subscription['payment_method']; ?></div>
											</div>
										</td>
									
										
									</tr>
									<hr>
									<tr style="border-top: 1px solid #eee;">
										<td>
											<div class="mt-5"><b><?php echo get_phrase('Titulo de la página'); ?>:</b></div><br>
										</td>
										<td>
											<div class="mt-5"><b><?php echo $page_title;?></b></div><br>
										</td>
									</tr>
									<tr>
										<td>
											<div class="mt-5"><b><?php echo get_phrase('Cantidad pagada'); ?>:</b></div><br>
										</td>
										<td>
											<div class="mt-5"><b class="text-success"><?php echo $subscription['paid_amount'].' '.$subscription['currency'];?></b></div><br>
										</td>
									</tr>
							
	                </table>
	                <a href="javascript:window.print()" class="btn btn-primary float-right mt-5"><i class="mdi mdi-printer"></i> Print</a>
	            </div>
	        </div>
	    </div>
	</div>

    <!-- jquery -->
    <script src="<?php echo base_url('assets/backend/login/jquery-3.3.1.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    
</body>
</html>
