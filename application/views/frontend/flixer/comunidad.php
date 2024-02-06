<?php include 'header_browse.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/set1.css" />


<div class="container">

<h4 style="text-transform: capitalize;"><?php echo get_phrase('Comunidad Web'); ?></h4>

	<div class="container">

					<widgetbot
					server="1204257621952041002"
					channel="1204278028826578944"
					width="800"
					height="600"
				></widgetbot>
				<script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>

	</div>
	
</div>


<hr style="border-top:1px solid #333; margin-top: 50px;">
<div class="container">
	<?php include 'footer.php';?>
</div> 