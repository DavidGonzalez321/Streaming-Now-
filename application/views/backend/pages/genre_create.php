<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
        	<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('Genero'); ?>
				</div>
			</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/genre_create">
					<div class="form-group mb-3">
	                    <label for="name">Nombre del genero</label>
						<span class="help">e.g. "Accion, Romantica"</span>
	                    <input type="text" class="form-control" id = "name" name="name">
	                </div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Create">
						<a href="<?php echo base_url();?>index.php?admin/genre_list" class="btn btn-black">Volver a atrás</a>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
