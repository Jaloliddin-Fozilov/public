<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ghpharm
 */

get_header();
?>



<?php
		while ( have_posts() ) :
			the_post(); ?>

<div class="section header" style="text-align: center;">

	<h1><?php the_title(); ?></h1>

	

	<div class="card-img">
		<img style="width: 40%; " src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full')[0]; ?>" alt="">
	</div>
<!-- 	<h6><?php the_field('subtitle'); ?></h6> -->
	<!--<h1 class="price"><?php the_field('price') ?></h1>-->
	<!--<?php if( get_field('dicount_price')) ?> <h3 style="text-decoration: line-through; color: gray;">-->
			<!--<?php the_field('dicount_price') ?></h3>-->


	
	<div class="container" style="text-align: left"> 
		<div class="old-price"></div>
		<p><?php the_content(); ?></p>
		<div class="old-price"></div>
	</div>

</div>

<?php	endwhile; // End of the loop.
		?>

<?php
get_footer();?>