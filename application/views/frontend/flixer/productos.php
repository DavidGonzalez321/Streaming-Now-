<?php include 'header_browse.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/set1.css" />


<div class="container">

<h4 style="text-transform: capitalize;"><?php echo get_phrase('Lista de Productos'); ?></h4>

	<div class="container">

	<?php include 'application/views/backend/pages/productos.php';?>

	</div>
	
</div>


<hr style="border-top:1px solid #333; margin-top: 50px;">
<div class="container">
	<?php include 'footer.php';?>
</div> 