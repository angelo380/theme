<?php /* Template Name: Frontpage */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
		<h2>Peliculas</h2>
		<?php 
				$args=array(
				  //'features_products' => 'novedades',
				  'post_type' => 'movies',
				  'post_status' => 'publish',
				  'posts_per_page' => 20,
				);
				$movies = new WP_Query($args);
				?>		

		<?php  if ( $movies->have_posts() ) {  ?>
			
			<?php while ($movies->have_posts()): $movies->the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div><?php the_post_thumbnail('small');?></div>
				<h4><?php the_title(); ?></h4>
				<div><?php the_content(); ?></div>
				<a href="<?php the_permalink(); ?>">Leer más</a>

			

			</article>
			<!-- /article -->

		<?php endwhile; wp_reset_postdata(); ?>


		<?php  } ?>

			

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
