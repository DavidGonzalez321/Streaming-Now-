<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
        	<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('Pais'); ?>
				</div>
			</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/country_create">
					<div class="form-group mb-3">
	                    <label for="name"><?php echo get_phrase('Nombre del pais'); ?></label>
	                    <input type="text" class="form-control" id = "name" name="name">
	                </div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="<?php echo get_phrase('Crear'); ?>">
						<a href="<?php echo base_url();?>index.php?admin/country" class="btn btn-black">Volver a atras</a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
