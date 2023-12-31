<div class="row ">
  <div class="col-lg-12">
    <a href="<?php echo base_url();?>index.php?admin/country_create/" class="btn btn-primary" style="float:right; margin-top: -40px; margin-bottom: 20px;">
	<i class="fa fa-plus"></i>
		<?php echo get_phrase('Añadir pais'); ?>
	</a>
  </div><!-- end col-->
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			<?php echo get_phrase('Paises'); ?>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered datatable" id="table_export">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th><?php echo get_phrase('Pais'); ?></th>
					<th><?php echo get_phrase('Operación'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$countries = $this->crud_model->get_countries();
					$counter = 1;
					foreach ($countries as $row):
					  ?>
				<tr>
					<td><?php echo $counter++;?></td>
					<td style="text-transform: uppercase;"><?php echo $row['name'];?></td>
					<td>
						<a href="<?php echo base_url();?>index.php?admin/country_edit/<?php echo $row['country_id'];?>" class="btn btn-info">
						<?php echo get_phrase('Editar'); ?></a>
						<a href="<?php echo base_url();?>index.php?admin/country_delete/<?php echo $row['country_id'];?>" class="btn btn-danger" onclick="return confirm('Quieres eliminarlo?')">
						<?php echo get_phrase('Eliminar'); ?></a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>