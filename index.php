<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> block</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/estilo.css">



	</head>
     <body>


      <header class="container">
      	<center >


      	



      		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2iFX2lAEEhebur0wgLegaonoL2JvJPpxfRg&usqp=CAU" width="200">

      		<ul class="inicio">



      			<li> Inicio</li>
      			<li> Deporte </li>
      			<li> Mujeres</li>
      			
      		</ul>
                 </center>
     </header>

		<section class="container">
			<center>


<?php $articulos = new WP_Query(['showposts'=> 3,

      	        ]);
      	while ($articulos->have_posts()) {
      		$articulos->the_post(); ?>





      		<?php the_post_thumbnail('medium'); ?>
				<h2><?php the_title(); ?></h2>

				<?php the_excerpt(); ?>






      		
      	<?php	} ?>


	
				

			</center>

			</section>
			<footer class="container">>
				<center>
			<ul class="inicio">

      			<li> <i class="fa fa-facebook-official" aria-hidden="true"></i></li>
      			<li> <i class="fa fa-twitter-square" aria-hidden="true"></i> </li>
      			<li> <i class="fa fa-instagram" aria-hidden="true"></i></li>
      			
      		</ul>
				</center>
			</footer>

		
</body>
	
</style>
	
