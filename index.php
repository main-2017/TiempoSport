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

		<!-- Outstanding news in carousel -->
		<!-- Just visible in small and extra small devices -->
		<h2 class="section-title d-block d-sm-block d-md-none">Destacadas</h2>
			  

		<!-- Normal outstanding-news -->
		<section class="row" id="outstanding-news">
			<img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/destacados.png" alt="Noticias Destacadas"><h2 class="section-title">Noticias Destacadas</h2>
			<?php
		        $args = array(
		          'post_type' => 'tiempo_sport_slider',
		          'posts_per_page' => 3
		          );
        		$loop = new WP_Query( $args );

		        if ($loop->have_posts()) : ?>
		          <div id="tiempo_sport_slider-home" class="carousel slide" data-ride="carousel">
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
				<img src="<?php bloginfo( 'template_url' ); ?>/img/publicidad-side.jpg">
			</article>
		</section>
		<div class="wrapper">
			
		</div>
		<section class="row" id="complementary-news-1">
			<article class="col-lg-4 col-md-4 col-sm-12 small-article">
				<img class="img-adapt" alt="" src="<?php bloginfo( 'template_url' ); ?>/img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
			</article>
			<article class="col-lg-4 col-md-4 col-sm-12 small-article">
				<img class="img-adapt" alt="" src="<?php bloginfo( 'template_url' ); ?>/img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
			</article>
			<article class="col-lg-4 col-md-4 col-sm-12 small-article">
				<img class="img-adapt" alt="" src="<?php bloginfo( 'template_url' ); ?>/img/news370x250.jpg"><!-- Colocar imagen de 370px por 250px -->
				<h4 class="label-sm">Article content here</h4>
				<p class="content-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
			</article>
		</section>
		<div class="wrapper">
			
		</div>
		<div class="row sponsor-banner">
			
		</div>
		<div class="wrapper">
			
		</div>
		<section class="row" id="media-news">
			
			<div class="col-lg-6 col-md-6 col-sm-12 no-padding">
				<img class="img-responsive middle-icon" src="<?php bloginfo( 'template_url' ); ?>/img/fotonoticon.png" alt="Noticias en fotografias"><h2 class="section-title spacer">Foto-Noticias</h2>
				<article class="big-article">
					<img class="img-fluid" src="<?php bloginfo( 'template_url' ); ?>/img/Maradona-River-Boca.jpg" alt="">
				</article>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-12 no-padding">
				<img class="img-responsive middle-icon" src="<?php bloginfo( 'template_url' ); ?>/img/videoicon.png" alt="Noticias en video"><h2 class="section-title spacer">Video-Noticias</h2>
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/GNq3LhtvVEw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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