<?php 


if (is_category("Futbol") || is_category("General-Futbol") || is_category("Local-Futbol") || is_category("Semillero") || is_category("Aficionado")) {
	get_header("futbol");
}elseif (is_category("Motores") || is_category("General-Motores") || is_category("Internacional-Motores") || is_category("Local-Motores") || is_category("Nacional-Motores")) {
	get_header("motores");
}elseif (is_category("Polideportivo") || is_category("General-Polideportivo") || is_category("Rugby") || is_category("Hockey") || is_category("Tenis")) {
	get_header("polideportivo");
}elseif (is_category("extras") || is_category("General-Extras") || is_category("La Zurda Inmortal") || is_category("Memoria Emotiva") || is_category("Te Seguimos")) {
	get_header("extras");
}else{
	get_header();
}
	 ?>

	<div class="container">
		<div class="row information-content d-block d-sm-block d-md-none">
  			<div class="inner-information-content">
  				<h4 class="text-content">Azul/19&#176;</h4>
  			</div>
  			<div class="inner-information-content">
  				<h4 id="today" class="text-content"><?php echo get_date() ?></h4>
  			</div>
  		</div>
		<div class="row span-content d-none d-md-block">
			<h4 class="span-content-inner" id="dateField"></h4>
		</div>

		<!-- Outstanding news in carousel -->
		<?php if (is_category()){ ?>
				<h2 class="section-title"><?php single_cat_title() ?></h2>	
		<?php } ?>
		<?php if (is_tag()){ ?>
				<h2 class="section-title"><span class="tiempo-font">B </span><?php single_tag_title() ?></h2>	
		<?php } ?>
		<?php if (is_author()){ ?>
			<h2 class="section-title"><span class="tiempo-font">B </span><?php single_cat_title() ?></h2>	
		<?php } ?>
		<?php if (is_date()){ ?>
			
		<?php } ?>



		
			<div class="row">
				<?php 
					while (have_posts()): the_post(); 
				?>
				<div class="col-md-4 no-padding">
					<article <?php post_class('small-article no-border-top'); ?> >
						<?php 
							if (has_post_thumbnail()):
								the_post_thumbnail('large');
							endif;
						 ?>
						<h4 class="label-sm"><a class="label-sm" href="<?php echo get_permalink(); ?>">
							<?php the_title(); ?>
						</a></h4>
						<p class="content-sm">
							<?php the_excerpt(); ?>
						</p>
						<a class="readmore" href="<?php echo get_permalink(); ?>">
							
						</a>
					</article>
				</div>
				<?php 
					endwhile;
				 ?>
			</div>
	</div>
	<div class="wrapper"></div>
		
	
	
<?php get_footer(); ?>