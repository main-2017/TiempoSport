<?php
	get_header();
?>
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

			
				<?php
				  while (have_posts()) : the_post();
				 ?>
				<div class="col-md-9 col-xs-12">
					 <article <?php post_class(); ?>>
					 	<div class="row"> <!-- cambiar esta clase por las propias -->
					 		<?php the_title('<h1 class="section-title">','</h1>'); ?> <!-- cambiar esta clase por las propias -->
					 	</div>
					 	<div class="text-box">
					 		<?php the_content(); ?>
					 	</div>
					 </article>
				 </div>
				<?php 
					endwhile;
				 ?>
				<div class="col-md-3 col-xs-12">
				</div>
					
				
		</div>
	</div>


<?php
	get_footer(); 
?>