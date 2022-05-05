<?php get_header();?>


		<section >
			<center>
				<?php the_post_thumbnail("large");?>

				<h2><?php the_title();?></h2>

				<?php the_content();?>

			</center>

			</section>
			<?php get_footer();?>