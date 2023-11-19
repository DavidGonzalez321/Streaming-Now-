<div class="row">
    <div class="col-md-6">
		<form method="post" action="<?php echo base_url();?>index.php?admin/movie_create" enctype="multipart/form-data">
	        <div class="panel panel-primary">
	        	<div class="panel-heading">
	        		<div class="panel-title">Crear pelicula</div>
	        	</div>
	            <div class="panel-body">
					<div class="form-group mb-3">
	                    <label for="simpleinput1">Titulo de la pelicula</label>
	                    <input type="text" class="form-control" id = "simpleinput1" name="title" required>
	                </div>
					<div class="form-group mb-3">
	                    <label for="url">URL del trailer de la pelicula</label>
						<span class="help">- Youtube o cualquier hosting de video</span>
	                    <input type="text" class="form-control" name="trailer_url" id="trailer_url" required>
	                </div>
					<div class="form-group mb-3">
	                    <label for="url">URL de la pelicula</label>
						<span class="help">- Youtube o cualquier hosting de video</span>
	                    <input type="text" class="form-control" name="url" id="url" required>
	                </div>

					<div class="form-group mb-3">
	                    <label for="">Thumbnail</label>
						<span class="help">- Icono de imagen de la pelicula</span>
	                    <input type="file" class="form-control" name="thumb">
	                </div>

					<div class="form-group mb-3">
	                    <label for="">Poster</label>
						<span class="help">- Poster largo de la pelicula</span>
	                    <input type="file" class="form-control" name="poster">
	                </div>

	                <div class="form-group mb-3">
                        <label for="duration">Duracion</label>
                        <div class="input-group">
                            <input type="text" name="duration" class="form-control timepicker" value=" " data-template="dropdown" data-show-seconds="true" data-show-meridian="false" data-minute-step="1" data-second-step="1" placeholder="Hora : Minutos : Segundos"/>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="dripicons-clock"></i></span>
                            </div>
                        </div>
                    </div>

					<div class="form-group mb-3">
						<label for="description_long">Descripción larga</label>
						<textarea class="form-control" id="description_long" name="description_long" rows="6"></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="description_short">Descripción corta</label>
						<textarea class="form-control" id="description_short" name="description_short" rows="6"></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="director">Director</label>
						<span class="help">- Selecciona un director</span>
						<select class="form-control select2" id="director" name="director" required>
							<option value="">Selecciona un director</option>
							<?php
								$directors	=	$this->db->get('director')->result_array();
								foreach ($directors as $row3):?>
							<option value="<?php echo $row3['director_id'];?>">
								<?php echo $row3['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="actors">Actores</label>
						<span class="help">- Selecciona multiples actores</span>
						<select class="form-control select2" id="actors" multiple name="actors[]" required>
							<?php
								$actors	=	$this->db->get('actor')->result_array();
								foreach ($actors as $row2):?>
							<option value="<?php echo $row2['actor_id'];?>">
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
								<option value="<?php echo $country['country_id'];?>">
									<?php echo $country['name'];?>
								</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="genre_id">Genero</label>
						<span class="help">- Genero debe estar seleccionado</span>
						<select class="form-control select2" id="genre_id" name="genre_id">
							<?php
								$genres	=	$this->crud_model->get_genres();
								foreach ($genres as $row2):?>
							<option value="<?php echo $row2['genre_id'];?>">
								<?php echo $row2['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="year">Año de publicación</label>
						<span class="help">- Año de publicación</span>
						<select class="form-control" id="year" name="year" required>
							<?php for ($i = date("Y"); $i > 2000 ; $i--):?>
							<option value="<?php echo $i;?>">
								<?php echo $i;?>
							</option>
							<?php endfor;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="rating">Calificación</label>
						<span class="help">- Estrellas obtenida de califiación</span>
						<select class="form-control" id="rating" name="rating">
							<?php for ($i = 0; $i <= 5 ; $i++):?>
							<option value="<?php echo $i;?>">
								<?php echo $i;?>
							</option>
							<?php endfor;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="featured">Destacada</label>
						<span class="help">- La película destacada se mostrará en la página de inicio.</span>
						<select class="form-control" id="featured" name="featured">
							<option value="0">No</option>
							<option value="1">Si</option>
						</select>
					</div>
					<div class="row mt-3">
			        	<div class="col-md-6 text-center">
							<input type="submit" class="btn btn-success w-100" value="Crear pelicula">
			        	</div>
			        	<div class="col-md-6 text-center">
			        		<a href="<?php echo base_url();?>index.php?admin/movie_list" class="btn btn-black w-100">Volver a atrás</a>
			        	</div>
			        </div>
	            </div>
	        </div>
	    </form>
	</div>

	<div class="col-md-6">
		<div class="form-group">
			<label class="form-label">Vistazo:</label>
			<div id="video_player_div"></div>
		</div>
	</div>
</div>

<script>
	// //file upload with ajax
	// function movie_upload(){
	// 	var file_data = $('#movie_upload').prop('files')[0];  //input field 
	// 	var form_data = new FormData();
	// 	form_data.append('file', file_data);
	// 	alert(form_data);                             
	// 	$.ajax({
	// 		url: 'upload.php', // point to server-side PHP script 
	// 		dataType: 'text',  // what to expect back from the PHP script, if anything
	// 		cache: false,
	// 		contentType: false,
	// 		processData: false,
	// 		data: form_data,                         
	// 		type: 'post',
	// 		success: function(php_script_response){
	// 		    alert('php_script_response'); // display response from the PHP script, if any
	// 		}
	// 	});
	// }
</script>