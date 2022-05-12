<?php get_header();?>


		<section >
			<center>
				<h2><?php the_title();?></h2>
				<H5> Resumen:<?php the_field('resumen'); ?> </H5>


				<?php the_post_thumbnail("large");?>

			

			<?php the_content();?>

				<H6> fuente: <?php the_field('fuente'); ?></H6>
				
			</center>

			</section>
			<?php get_footer();?>