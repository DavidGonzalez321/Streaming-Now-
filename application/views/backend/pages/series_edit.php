<?php
	$series_detail = $this->db->get_where('series',array('series_id'=>$series_id))->row();
?>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
        	<div class="panel-heading">
        		<div class="panel-title">
        			Editar Series
        		</div>
        	</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/series_edit/<?php echo $series_id;?>" enctype="multipart/form-data">
	                <div class="form-group mb-3">
	                    <label for="title">Titulo de la serie</label>
	                    <input type="text" class="form-control" id = "title" name="title" value="<?php echo $series_detail->title;?>">
	                </div>
	                <div class="form-group mb-3">
	                    <label for="title">URL del trailer de la serie</label>
	                    <input type="text" class="form-control" id = "title" name="series_trailer_url" value="<?php echo $series_detail->trailer_url;?>">
	                </div>

	                <div class="form-group mb-3">
	                    <label for="thumb">Thumbnail</label>
						<span class="help">- Icono de imagen de la serie</span>
	                    <input type="file" class="form-control" name="thumb">
	                </div>

	                <div class="form-group mb-3">
	                    <label for="poster">Poster</label>
						<span class="help">- Portada larga de la serie</span>
	                    <input type="file" class="form-control" name="poster">
	                </div>

					<div class="form-group mb-3">
						<label for="description_short">Descripción corta</label>
						<textarea class="form-control" id="description_short" name="description_short" rows="6"><?php echo $series_detail->description_short;?></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="description_long">Descripción larga</label>
						<textarea class="form-control" id="description_long" name="description_long" rows="6"><?php echo $series_detail->description_long;?></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="director">Director</label>
						<span class="help">- Selecciona un director</span>

						<?php $serise_of_director = $series_detail->director;?>
						
						<select class="form-control select2" id="director" name="director" required>
							<option value="">Select un Director</option>
							<?php
								$directors	=	$this->db->get('director')->result_array();

								foreach ($directors as $row3):?>
							<option value="<?php echo $row3['director_id'];?>" <?php if( $serise_of_director == $row3['director_id'])echo 'selected';?>>
								<?php echo $row3['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="actors">Actores</label>
						<span class="help">- Select multiples actores</span>
						<select class="form-control select2" id="actors" multiple name="actors[]">
							<?php
								$actors	=	$this->db->get('actor')->result_array();
								foreach ($actors as $row2):?>
							<option
								<?php
									$actors	=	$series_detail->actors;
									if ($actors != '')
									{
										$actor_array	=	json_decode($actors);
										if (in_array($row2['actor_id'], $actor_array))
											echo 'selected';
									}
									?>
								value="<?php echo $row2['actor_id'];?>">
								<?php echo $row2['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>


					<div class="form-group mb-3">
						<label for="country_id">Pais</label>
						<select class="form-control select2" id="country_id" name="country_id" required>
							<?php
								$countries	=	$this->crud_model->get_countries();
								foreach ($countries as $country):?>
								<option value="<?php echo $country['country_id'];?>" <?php if($country['country_id'] == $series_detail->country_id) echo 'selected'; ?>>
									<?php echo $country['name'];?>
								</option>
							<?php endforeach;?>
						</select>
					</div>
					
					<div class="form-group mb-3">
						<label for="genre_id">Género</label>
						<span class="help">- Genero debe estar seleccionado</span>
						<select class="form-control select2" id="genre_id" name="genre_id">
							<?php
								$genres	=	$this->crud_model->get_genres();
								foreach ($genres as $row2):?>
							<option
								<?php if ( $series_detail->genre_id == $row2['genre_id']) echo 'selected';?>
								value="<?php echo $row2['genre_id'];?>">
								<?php echo $row2['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="year">Año de publicación</label>
						<span class="help">- Año de publicación</span>
						<select class="form-control" id="year" name="year">
							<?php for ($i = date("Y"); $i > 2000 ; $i--):?>
							<option
								<?php if ( $series_detail->year == $i) echo 'selected';?>
								value="<?php echo $i;?>">
								<?php echo $i;?>
							</option>
							<?php endfor;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="rating">Califiación</label>
						<span class="help">- Estrellas de califiación</span>
						<select class="form-control" id="rating" name="rating">
							<?php for ($i = 0; $i <= 5 ; $i++):?>
							<option
								<?php if ( $series_detail->rating == $i) echo 'selected';?>
								value="<?php echo $i;?>">
								<?php echo $i;?>
							</option>
							<?php endfor;?>
						</select>
					</div>
					<div class="row mt-3">
			        	<div class="col-md-6 text-center">
							<input type="submit" class="btn btn-success w-100" value="Update Series">
			        	</div>
			        	<div class="col-md-6 text-center">
			        		<a href="<?php echo base_url();?>index.php?admin/series_list" class="btn btn-black w-100">Volver a atrás</a>
			        	</div>
			        </div>
				</form>
            </div>
        </div>
    </div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					Temporadas y episodios
				</div>
			</div>
            <div class="panel-body">
				<a href="<?php echo base_url();?>index.php?admin/season_create/<?php echo $series_id;?>"
					class="btn btn-primary pull-right" style="margin-bottom: 10px;">
				<i class="fa fa-plus"></i>
				Crear temporada
				</a>

				<table class="table table-hover table-bordered table-centered mb-0" width="100%">
					<tbody>
						<?php
							$seasons	=	$this->crud_model->get_seasons_of_series($series_id);
							foreach ($seasons as $row):
							?>
						<tr>
							<td>
								<i class="fa fa-dot-circle-o"></i>
								<?php echo $row['name'];?>
							</td>
							<td>
								<?php
									$episodes	=	$this->crud_model->get_episodes_of_season($row['season_id']);
									echo count($episodes);
									?>
								Episodios
							</td>
							<td>
								<a href="<?php echo base_url();?>index.php?admin/season_edit/<?php echo $series_id.'/'.$row['season_id'];?>"
									class="btn btn-info">
								Administrar episodios</a>
								<a href="<?php echo base_url();?>index.php?admin/season_delete/<?php echo $series_id.'/'.$row['season_id'];?>"
									class="btn btn-danger" onclick="return confirm('Quieres eliminarlo?')">
								Eliminar</a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
                </table>
            </div>
        </div>
	</div>
</div>
