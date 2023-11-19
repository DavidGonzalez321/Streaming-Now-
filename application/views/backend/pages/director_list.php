<div class="row ">
  <div class="col-lg-12">
    <a href="<?php echo base_url();?>index.php?admin/director_create/" class="btn btn-primary" style="float:right; margin-top: -45px; margin-bottom: 20px;">
	<i class="fa fa-plus"></i>
		Crear Director
	</a>
  </div><!-- end col-->
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">
			<?php echo get_phrase('Lista de directores'); ?>
		</div>
	</div>
	<div class="panel-body">
		<table class="table table-bordered datatable" id="table_export">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th></th>
					<th>Nombre del director</th>
					<th>Operacion</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$directors = $this->db->get('director')->result_array();
					$counter = 1;
					foreach ($directors as $row):
					  ?>
				<tr>
					<td style="vertical-align: middle;"><?php echo $counter++;?></td>
					<td><a href="<?php echo base_url().'index.php?admin/director_wise_movie_and_series/'.$row['director_id']; ?>"><img src="<?php echo $this->crud_model->get_director_image_url($row['director_id']);?>" style="height: 60px;" /></a></td>
					<td style="vertical-align: middle;"><a href="<?php echo base_url().'index.php?admin/director_wise_movie_and_series/'.$row['director_id']; ?>" style="color: #6c757d;"><?php echo $row['name'];?></a></td>
					<td style="vertical-align: middle;">
						<a href="<?php echo base_url();?>index.php?admin/director_edit/<?php echo $row['director_id'];?>" class="btn btn-info">
						Editar</a>
						<a href="<?php echo base_url();?>index.php?admin/director_delete/<?php echo $row['director_id'];?>" class="btn btn-danger" onclick="return confirm('Quieres eliminar?')">
						Eliminar</a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>