

<?php get_header(); ?>
	<div class="container">
		<div class="row information-content d-block d-sm-block d-md-none">
  			<div class="inner-information-content">
  				<h4 class="text-content">Azul/19&#176;</h4>
  			</div>
  			<div class="inner-information-content">
  				<h4 id="today" class="text-content">10 de mayo 2018</h4>
  			</div>
  		</div>
		<div class="row span-content d-none d-md-block">
			<h4 class="span-content-inner" id="dateField"></h4>
		</div>

	  

		<!-- Normal outstanding-news -->
		<section class="row" id="outstanding-news">
			<img class="img-responsive d-sm-block d-none" src="<?php bloginfo( 'template_url' ); ?>/img/destacados.png" alt="Noticias Destacadas"><h2 class="section-title">Noticias Destacadas</h2>
			<?php
		        $args = array(
		          'post_type' => 'Slider',
		          'posts_per_page' => 3
		          );
        		$loop = new WP_Query( $args );

		        if ($loop->have_posts()) : ?>
		          <div id="tiempo_sport_slider-home" class="col-lg-9 col-md-9 col-xs-12 carousel slide" data-ride="carousel">
		            <ol class="carousel-indicators">
		              <?php
		              $l = $loop->post_count;
		              for ($i = 0; $i < $l; $i++) { ?>
		                <li data-target="#tiempo_sport_slider-home"
		                    data-slide-to="<?php echo $i; ?>"
		                    <?php if ($i == 0) { ?> class="active"<?php } ?>>
		                </li>
		              <?php
		              }
		              ?>
		            </ol>
		            <div class="carousel-inner" role="listbox">
		            <?php
		              $n = 0;
		              while ( $loop->have_posts() ) : $loop->the_post(); ?>
		                <div class="carousel-item <?php if($n == 0) { echo 'active'; } ?>">

		                  <?php echo get_the_post_thumbnail( $loop->ID, 'palabras_cruzadas_featured_image' ); ?>

		                  <div class="carousel-caption">

		                    <?php the_content(); ?>
		                    <br>

		                  </div>

		                </div>
		                <?php
		                $n++;
		              endwhile;
		            ?>
		            </div>
		          </div>
		        <?php
		        endif;
		        ?>
			<article class="col-lg-3 col-md-3 col-sm-12 big-article">
				<?php if ( is_active_sidebar( 'sidebar-home' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-home' ); ?>
                 <?php endif; ?>  
			</article>
		</section>
		<div class="wrapper">
			
		</div>
		<section class="row" id="complementary-news-1">
			
				<div class="row">
				<?php 
					while (have_posts()): the_post(); 
				?>
				
					<article class="col-lg-4 col-md-4 col-sm-12 col-xs-12 small-article">
						<?php 
							if (has_post_thumbnail()):
								the_post_thumbnail('thumbnail-news');
							endif;
						 ?>
						<h4 class="label-sm"><a class="label-sm" href="<?php echo get_permalink(); ?>">
							<?php the_title(); ?>
						</a></h4>
						<p class="content-sm">
							<?php the_excerpt(); ?>
						</p>
						
					</article>
				
				<?php 
					endwhile;
				 ?>
			</div>

			
		</section>
		<div class="wrapper">
			
		</div>
		<div class="row sponsor-banner">
			
		</div>
		<div class="wrapper">
			
		</div>
		<section class="row" id="media-news">
			
			<div class="col-lg-6 col-md-6 col-sm-12 no-padding">
				<h2 class="section-title spacer">Foto-Noticias</h2>
				<article class="big-article">
					<?php if ( is_active_sidebar( 'sidebar-photo' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-photo' ); ?>
                 	<?php endif; ?> 
					
				</article>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-12 no-padding">
				<h2 class="section-title spacer">Video-Noticias</h2>
				<article class="big-article">
					<?php if ( is_active_sidebar( 'sidebar-video' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-video' ); ?>
                 	<?php endif; ?> 
					
				</article>
					
			</div>			
		</section>
		<div class="wrapper">
			
		</div>
		<div class="row sponsor-banner">
			
		</div>
		<div class="wrapper">
			
		</div>
		
	</div>
<?php get_footer(); ?>