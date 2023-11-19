<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="black_text"><?php echo get_phrase('Cancela tu suscripción');?>?</h3>
			<hr>
		</div>
		<div class="col-lg-8">
			<h4 class="black_text"><?php echo get_phrase('Haga clic en: Finalizar Cancelación para cancelar su membresía');?></h4>
			<ul class="black_text">
				<li>
					<?php echo get_phrase('La cancelación será efectiva inmediatamente después de su confirmación.');?>
				</li>
				<li>
					<?php echo get_phrase('Reinicie su membresía en cualquier momento. Tus preferencias de visualización se guardarán siempre');?>
				</li>
			</ul>
			<form method="post" action="<?php echo base_url();?>index.php?browse/cancelplan">
				<input type="hidden" name="task" value="<?php echo get_phrase('Cancelar plan');?>" />
				<button class="btn btn-primary" type="submit"> <?php echo get_phrase('Finalizar cancelación');?> </button>
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default"><?php echo get_phrase('Volver a atrás');?></a>
			</form>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>


