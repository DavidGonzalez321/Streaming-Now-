<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo collapse icon -->
        <div id="hide_brand1" class="sidebar-collapse" style="margin-top: 0px;">
            <a href="#" class="sidebar-collapse-icon" onclick="hide_brand1()">
                <i class="entypo-menu"></i>
            </a>
        </div>
        <div id="hide_brand2" style="margin-top: 0px; display: none; float: right;">
            <a href="#" class="sidebar-collapse-icon" onclick="hide_brand2()">
                <i class="entypo-menu"></i>
            </a>
        </div>

        <!--Start custom responsive navigation-->
        <script type="text/javascript">
          window.onresize = doALoadOfStuff;
          function doALoadOfStuff() {
            if($(window).width() < 767){
              $('#hide_brand2').hide();
              $('#hide_brand1').hide();
              $('.custom-query').css("padding-left", "8px");
            }
            if($(window).width() > 767 && $(window).width() < 990){
              $('#hide_brand1').show();
              $('.custom-query').css("padding-left", "85px");
            }
            if($(window).width() > 990 ){
              $('#hide_brand1').show();
              $('.custom-query').css("padding-left", "300px");
            }
          }
          function hide_brand1() {
              $('#branding_element').toggle();
              $('#hide_brand2').show();
              $('#hide_brand1').hide();
              if($(window).width() > 767 && $(window).width() < 990){
                $('.custom-query').css("padding-left", "300px");
              }
              if($(window).width() > 990){
                $('.custom-query').css("padding-left", "85px");
              }
          }
          function hide_brand2() {
              $('#branding_element').toggle();
              $('#hide_brand2').hide();
              $('#hide_brand1').show();
              if($(window).width() > 767 && $(window).width() < 990){
                $('.custom-query').css("padding-left", "85px");
              }
              if($(window).width() > 990){
                $('.custom-query').css("padding-left", "300px");
              }
          }
        </script>
        <!--End custom responsive navigation-->

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
       <!--- Sidemenu -->
    <div style=""></div>
    <ul id="main-menu" class="">
        <div style="text-align: -webkit-center;" id="branding_element">
          <h4 style="color: #a2a3b7;text-align: -webkit-center;margin-bottom: 25px;font-weight: 300;margin-top: 10px;">
              <a href="#"><img class="nav-icon" src="<?php echo base_url('assets/global/logo.png'); ?>" style="max-height:25px,width: 120px;height: 120px;"></a>
          </h4>
        </div>
           <li class="side-nav-item <?php if ($page_name == 'dashboard')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/dashboard" class="side-nav-link <?php if ($page_name == 'dashboard')echo 'active';?>">
                   <i class="fa fa-tachometer"></i>
                   <span> <?php echo get_phrase('Inicio'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'movie_list' || $page_name == 'movie_edit' || $page_name == 'movie_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/movie_list" class="side-nav-link  <?php if ($page_name == 'movie_list' || $page_name == 'movie_edit' || $page_name == 'movie_create')echo 'active';?>">
                   <i class="fa fa-film"></i>
                   <span> <?php echo get_phrase('Peliculas'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'series_list' || $page_name == 'series_create' || $page_name == 'series_edit' || $page_name == 'season_edit')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/series_list" class="side-nav-link <?php if ($page_name == 'series_list' || $page_name == 'series_create' || $page_name == 'series_edit' || $page_name == 'season_edit')echo 'active';?>">
                   <i class="fa fa-ticket"></i>
                   <span> <?php echo get_phrase('Series'); ?> </span>
               </a>
           </li>

           <li  class="side-nav-item  <?php if ($page_name == 'Sountrack')echo 'active';?>">
                 <a href="<?php echo base_url();?>index.php?admin/Sountrack" class="side-nav-link <?php if ($page_name == 'dashboard')echo 'active';?>">
                   <i class="fa fa-music"></i>
                   <span> <?php echo get_phrase('Sountrack'); ?> </span>
                </a>
            </li>

        <li  class="side-nav-item  <?php if ($page_name == 'Tienda Virtual')echo 'active';?>">
                <a href="<?php echo base_url();?>index.php?admin/Productos" class="side-nav-link <?php if ($page_name == 'dashboard')echo 'active';?>">
                   <i class="fa fa-amazon"></i>
                   <span> <?php echo get_phrase('Tienda Virtual'); ?> </span>
                </a>
        </li>

           <!-- Blogs -->
          <!-- <?php if(addon_status('blog')): ?>
            <li class="<?php if ($page_name == 'blogs' || $page_name == 'add_blog_form' || $page_name == 'edit_blog_form') echo 'opened has-sub'; ?>">
                <a href="#">
                    <i class="fa fa-align-left"></i>
                    <span><?php echo get_phrase('Comunidad web'); ?></span>
                </a>
                <ul>
                    <li class="<?php if ($page_name == 'blogs') echo 'active'; ?> ">
                        <a href="<?php echo base_url('index.php?addons/admin_blog'); ?>">
                            <span><?php echo get_phrase('Posts'); ?></span>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'add_blog_form') echo 'active'; ?> ">
                        <a href="<?php echo base_url('index.php?addons/admin_blog/blog_form/add'); ?>">
                            <span><?php echo get_phrase('Añadir un nuevo post'); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
          <?php endif; ?> -->

            <li class="side-nav-item <?php if ($page_name == 'country' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/country" class="side-nav-link <?php if ($page_name == 'country' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>">
                   <i class="fa fa-globe"></i>
                   <span> <?php echo get_phrase('País'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'genre_list' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/genre_list" class="side-nav-link <?php if ($page_name == 'genre_list' || $page_name == 'genre_edit' || $page_name == 'genre_create')echo 'active';?>">
                   <i class="fa fa-renren"></i>
                   <span> <?php echo get_phrase('Género'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'director_list' || $page_name == 'director_edit' || $page_name == 'director_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/director_list" class="side-nav-link <?php if ($page_name == 'director_list' || $page_name == 'director_edit' || $page_name == 'director_create')echo 'active';?>">
                   <i class="fa fa-long-arrow-right"></i>
                   <span> <?php echo get_phrase('Directores'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'actor_list' || $page_name == 'actor_edit' || $page_name == 'actor_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/actor_list" class="side-nav-link <?php if ($page_name == 'actor_list' || $page_name == 'actor_edit' || $page_name == 'actor_create')echo 'active';?>">
                   <i class="fa fa-user"></i>
                   <span> <?php echo get_phrase('Actores'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'user_list' || $page_name == 'user_edit' || $page_name == 'user_create')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/user_list" class="side-nav-link <?php if ($page_name == 'user_list' || $page_name == 'user_edit' || $page_name == 'user_create')echo 'active';?>">
                   <i class="fa fa-users"></i>
                   <span> <?php echo get_phrase('Usuarios'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'plan_list' || $page_name == 'plan_edit')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/plan_list" class="side-nav-link <?php if ($page_name == 'plan_list' || $page_name == 'plan_edit')echo 'active';?>">
                   <i class="fa fa-shopping-cart"></i>
                   <span> <?php echo get_phrase('Paquetes de membresias'); ?> </span>
               </a>
           </li>

           <li class="side-nav-item <?php if ($page_name == 'report')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/report" class="side-nav-link <?php if ($page_name == 'report')echo 'active';?>">
                   <i class="fa fa-flag-checkered"></i>
                   <span> <?php echo get_phrase('Reportes'); ?> </span>
               </a>
           </li>

            <li
            <?php
            $is_active = '';
            if ( $page_name == 'addons' || $page_name == 'addon_add' || $page_name == 'available_addons' || $page_name == 'about_addon') $is_active = 'opened'; ?> class="side-nav-item <?php echo $is_active; ?>">
                <a href="javascript: void(0);" class="side-nav-link <?php echo $is_active; ?>">
                    <i class="fa fa-plug" aria-hidden="true"></i>
					<span> <?php echo get_phrase('Adicionales'); ?> </span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li class = "<?php if($page_name == 'addons' || $page_name == 'about_addon') echo 'active'; ?>">
                        <a href="<?php echo site_url('index.php?admin/addon'); ?>"><?php echo get_phrase('Manejo de adicionales'); ?></a>
                    </li>

                    <li class = "<?php if($page_name == 'available_addons') echo 'active'; ?>">
                        <a href="<?php echo site_url('index.php?admin/available_addons'); ?>"><?php echo get_phrase('Adicionales disponibles'); ?></a>
                    </li>
                </ul>
            </li>

           <li
           <?php
           $is_active = '';
           if ( $page_name == 'faq_list' 		||
        		$page_name == 'faq_edit' 		||
        		$page_name == 'faq_create' 		||
        		$page_name == 'manage_language' ||
            $page_name == 'payment_settings' ||
        		$page_name == 'settings'  ||
            $page_name == 'smtp_settings' ) $is_active = 'opened'; ?>
            class="side-nav-item <?php echo $is_active; ?>">
               <a href="javascript: void(0);" class="side-nav-link <?php echo $is_active; ?>">
                   <i class="fa fa-gear"></i>
                   <span> <?php echo get_phrase('Configuración'); ?> </span>
               </a>
               <ul class="side-nav-second-level" aria-expanded="false">
                   <li class = "<?php if($page_name == 'settings') echo 'active'; ?>">
                       <a href="<?php echo base_url();?>index.php?admin/settings" class = ""><?php echo get_phrase('Configuración de la pagina'); ?></a>
                   </li>

                   <li class = "<?php if($page_name == 'payment_settings') echo 'active'; ?>">
                       <a href="<?php echo base_url();?>index.php?admin/payment_settings" class = ""><?php echo get_phrase('Configuración de métodos de pago'); ?></a>
                   </li>

                   <li class = "<?php if($page_name == 'manage_language') echo 'active'; ?>">
                       <a href="<?php echo base_url();?>index.php?admin/manage_language" class = ""><?php echo get_phrase('Configuración de idiomas'); ?></a>
                   </li>

                   <li class = "<?php if($page_name == 'smtp_settings') echo 'active'; ?>">
                       <a href="<?php echo base_url();?>index.php?admin/smtp_settings" class = ""><?php echo get_phrase('Configuracion de SMTP'); ?></a>
                   </li>

                   <li class = "<?php if($page_name == 'faq_list') echo 'active'; ?>">
                       <a href="<?php echo base_url();?>index.php?admin/faq_list" class = ""><?php echo get_phrase('FAQ del consumidor'); ?></a>
                   </li>
               </ul>
           </li>

           <li class="side-nav-item <?php if($page_name == 'account')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/account" class="side-nav-link <?php if($page_name == 'account')echo 'active';?>">
                   <i class="fa fa-lock"></i>
                   <span> <?php echo get_phrase('Cuenta'); ?> </span>
               </a>
           </li>
           <li class="side-nav-item <?php if($page_name == 'about')echo 'active';?>">
               <a href="<?php echo base_url();?>index.php?admin/about" class="side-nav-link <?php if($page_name == 'about')echo 'active';?>">
                   <i class="fa fa-info"></i>
                   <span> <?php echo get_phrase('Sobre ti'); ?> </span>
               </a>
           </li>
       </ul>
       <div class="clearfix"></div>
   </div>
   <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
