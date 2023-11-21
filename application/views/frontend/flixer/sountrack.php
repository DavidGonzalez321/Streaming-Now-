<?php include 'header_browse.php';?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/set1.css" />


<div class="container" style="width=100%;">

<h4 style="text-transform: capitalize;"><?php echo get_phrase('Lista de Sountrack'); ?></h4>

	<div class="container">

		<iframe style="border-radius:12px;margin:20px;" src="https://open.spotify.com/embed/album/6i6folBtxKV28WX3msQ4FE?utm_source=generator&theme=0"  height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
			

		<iframe style="border-radius:12px;margin:20px;" src="https://open.spotify.com/embed/playlist/5dpUtf3j2Uc74i0OX4bAu2?utm_source=generator&theme=0"   height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

	</div>
	
	

</div>


<hr style="border-top:1px solid #333; margin-top: 50px;">
<div class="container">
	<?php include 'footer.php';?>
</div>