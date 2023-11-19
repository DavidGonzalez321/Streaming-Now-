<div class="row"
  style="margin-top: 30px;">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-body">
        <div class="panel panel-default" data-collapsed="0"
          style="border-color: #dedede;">
    			<!-- panel body -->
    			<div class="panel-body" style="font-size: 14px;">
            <p style="font-size: 14px;">
              Bienvenido a la instalación de Stream Now. Necesitas conocer estos datos antes de continuar
              con el proceso de instalación.
            </p>
            <ol>
              <li>Nombre de la Base de Datos</li>
              <li>Usuario de la Base de Datos</li>
              <li>Contraseña de la Base de Datos</li>
              <li>Nombre del Host de la Base de Datos</li>
            </ol>
            <p style="font-size: 14px;">
              Utilizaremos dicha información para escribirla en el archivo database.php para realizar la conexión de la Aplicación con la Base de Datos.
              Durante el proceso de instalación, debe verificar que estos archivos: 
              (<strong>application/config/database.php</strong> y <strong>application/config/routes.php</strong>) tengan
              <strong>permisos de sobre escritura</strong>. Se debe revisar que las siguientes funciones: <strong>curl</strong> y <strong>php mail functions</strong>
              esten habilitadas en tu servidor.
            </p>
            <p style="font-size: 14px;">
              Ya conociendo toda esta información puede continuar con el proceso presionando el siguiente botón. 
              Si estas listo....
            </p>
            <br>
            <p>
              <a href="<?php echo site_url('index.php?install/step1');?>" class="btn btn-info">
                Iniciar proceso de instalación
              </a>
            </p>
    			</div>
    		</div>
      </div>
  </div>
</div>
