
<div class="row ">
    <div class="col-lg-12">
        <a href="<?php echo base_url();?>index.php?admin/movie_create/" class="btn btn-primary" style="float:right; margin-top: -40px; margin-bottom: 20px;">
            <i class="fa fa-plus"></i>
            Crear pelicula
        </a>
    </div><!-- end col-->
</div>

<div class="panel">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <select class="select2 form-control select2-multiple" data-toggle="select2" name="actor" id="actor" data-placeholder="Choose ...">
                    <option value="all"><?php echo get_phrase('Todos los actores'); ?></option>
                    <?php $actors = $this->db->get('actor')->result_array(); ?>
                    <?php foreach ($actors as $key => $actor): ?>
                        <option value="<?php echo $actor['actor_id']; ?>" <?php if ($actor_id == $actor['actor_id']): ?>selected<?php endif; ?>><?php echo $actor['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1 text-center">
                <button type="button" onClick="submit()" class="btn btn-success btn-cons" style="margin-top: 8px;">Filtrar</button>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">
            <?php echo get_phrase('Lista de peliculas'); ?>
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
                    <th>Titulo de la pelicula</th>
                    <th>Género</th>
                    <th>Operacion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($actor_id == 'all') {
                    $movies = $this->db->get('movie')->result_array();
                }else{
                    $movies = $this->crud_model->get_actor_wise_movies_and_tv_series($actor_id, 'movie');
                }

                $counter = 1;
                foreach ($movies as $row):?>
                <tr>
                    <td style="vertical-align: middle;"><?php echo $counter++;?></td>
                    <td><img src="<?php echo $this->crud_model->get_thumb_url('movie' , $row['movie_id']);?>" style="height: 60px;" /></td>
                    <td style="vertical-align: middle;"><?php echo $row['title'];?></td>
                    <td style="vertical-align: middle;">
                        <?php echo $this->db->get_where('genre',array('genre_id'=>$row['genre_id']))->row()->name;?>
                    </td>
                    <td style="vertical-align: middle;">
                        <a href="<?php echo base_url();?>index.php?browse/playmovie/<?php echo $row['movie_id'];?>"
                            target="_blank" class="btn btn-primary">
                            <i class="fa fa-external-link"></i> visitar</a>
                            <a href="<?php echo base_url();?>index.php?admin/subtitle/<?php echo $row['movie_id'];?>" class="btn btn-success">
                                Subtitulo</a>
                                <a href="<?php echo base_url();?>index.php?admin/movie_edit/<?php echo $row['movie_id'];?>" class="btn btn-info">
                                    Editar</a>
                                    <a href="<?php echo base_url();?>index.php?admin/movie_delete/<?php echo $row['movie_id'];?>" class="btn btn-danger" onclick="return confirm('Quieres eliminarlo?')">
                                        Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>


            
<script>
    function submit()
    {
        actor  = document.getElementById("actor").value;
        window.location = "<?php echo base_url();?>index.php?admin/movie_list/" + actor;
    }
</script>

<body>
    
<div style="margin-top=10px; margin-bottom=10px">
<canvas id="myChart1" style="position: relative; height: 30vh; width: 60vw;"></canvas>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('myChart1')
        var myChart1 = new Chart(ctx, {
            type:'bar',
            data:{
                datasets: [{
                    label: 'rating',
                    backgroundColor: ['#6bf1ab','#63d69f', '#438c6c', '#509c7f', '#1f794e', '#34444c', '#90CAF9', '#64B5F6', '#42A5F5', '#2196F3', '#0D47A1'],
                    borderColor: ['black'],
                    borderWidth:1
                }]
            },
            options:{
                scales:{
                    y:{
                        beginAtZero:true
                    }
                }
            }
        })

        let url = 'http://localhost/streaming-now/apirest_php/movie.php'
        fetch(url)
            .then( response => response.json() )
            .then( datos => mostrar(datos) )
            .catch( error => console.log(error) )


        const mostrar = (movie) =>{
            movie.forEach(element => {
                myChart1.data['labels'].push(element.title)
                myChart1.data['datasets'][0].data.push(element.rating)
                myChart1.update()
            });
            console.log(myChart1.data)
        }    



    </script>
</body>
