<?php
/**
 * The template for displaying archive of Dosth Review Source taxonomy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dosth
 */
get_header();
?><div class="container"style="margin-top: 120px;">
<div class="workers-slider">
        <div class="owl-carousel owl-theme line-indecators dark">
            <?php
            
            $products = get_posts( [
                'numberposts' => -1,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'product',
                'suppress_filters' => true, 
            ] );
            foreach( $products as $product ){
                setup_postdata( $product ); ?>

            <div class="item">
                <div class="card">
                    <div class="card-img">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $product->ID ), 'full')[0]; ?>" alt="">
                    </div>
                    <div class="card-body">
                        <h6 class="subtitle"><?php echo $product->post_title; ?></h6>
                        <h5 class="title"><?php the_field('price', $product->ID) ?></h5>
                        <div class="icons">
                            <?php
                                $rating = get_field('rating', $product->ID); 
                                $total_stars = 5;
                                 // Loop for filled stars
                                for ($i = 1; $i <= floor($rating); $i++) {
                                    echo '<i class="fa-solid fa-star"></i>';
                                }

                                // Check if there's a half-star
                                if ($rating - floor($rating) >= 0.5) {
                                    echo '<i class="fa-solid fa-star-half-stroke"></i>';
                                    $i++; // Increment the star count after the half star
                                }

                                // Loop for empty stars
                                for (; $i <= $total_stars; $i++) {
                                    echo '<i class="fa-regular fa-star"></i>';
                                }

                            ?>
                           
                        </div>
                        <div class="price-btn"><a href="<?php the_permalink($product->ID) ?>" class="btn"><?php pll_e('Batafsil'); ?></a></div>
                    </div>
                </div>
            </div>
               
           <?php  }
            
            wp_reset_postdata();
            ?>
        </div>
    </div>
	</div>
<?php get_footer(); ?>
