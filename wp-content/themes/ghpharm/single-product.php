<?php
/**
 * The template for displaying all single posts
 *
 * @package ghpharm
 */

get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single-product.css">

<?php
while ( have_posts() ) : the_post(); ?>
<section class="product-detail">
    <div class="product-container">
        <div class="product-content">
            <div class="product-image-column">
                <div class="product-image-wrapper">
                    <div class="product-image-main">
                        <img id="main-image" loading="lazy"
                            src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full')[0]; ?>"
                            class="product-image" alt="Main product image" />
                    </div>
                    <div class="product-thumbnails">
                        <div class="thumbnail-grid">
                            <!-- Display Thumbnails -->
                            <?php
                            $image_ids = get_field('gallery', $post->ID); 
                            foreach ($image_ids as $image_id) {
                                $thumbnail_url = wp_get_attachment_image_src($image_id, 'thumbnail')[0];
                                $full_image_url = wp_get_attachment_image_src($image_id, 'full')[0]; ?>
                                <div class="thumbnail-item">
                                    <img data-src="<?php echo $full_image_url; ?>" src="<?php echo $thumbnail_url; ?>" class="thumbnail-image" alt="Thumbnail">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="product-info-column">
                <div class="product-info-wrapper">
                    <h1 class="product-title"><?php the_title(); ?></h1>
                    <div class="product-price-stock">
                        <h1 class="product-price"><?php the_field('price'); ?></h1>
                        <?php if( get_field('discount_price') ) : ?>
                            <h3 style="text-decoration: line-through; color: gray;">
                                <?php the_field('discount_price'); ?>
                            </h3>
                        <?php endif; ?>
                    </div>
                    <p class="product-description"><?php the_field('subtitle'); ?></p>
                </div>
            </div>
        </div>

        <nav class="product-tabs" role="tablist">
            <div class="tab-item" role="tab" aria-selected="true" tabindex="0">
                <div class="tab-title"><?php echo pll_e('Description'); ?></div>
                <div class="tab-indicator"></div>
            </div>
            <div class="tab-content" role="tabpanel" aria-labelledby="description-tab">
                <?php the_content(); ?>
            </div>
        </nav>

        <div class="workers-slider">
            <div class="owl-carousel owl-theme line-indicators dark">
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
                                <h5 class="title"><?php echo get_field('price', $product->ID); ?></h5>
                                <div class="icons">
                                    <?php
                                    $rating = get_field('rating', $product->ID); 
                                    $total_stars = 5;
                                    for ($i = 1; $i <= floor($rating); $i++) {
                                        echo '<i class="fa-solid fa-star"></i>';
                                    }
                                    if ($rating - floor($rating) >= 0.5) {
                                        echo '<i class="fa-solid fa-star-half-stroke"></i>';
                                        $i++;
                                    }
                                    for (; $i <= $total_stars; $i++) {
                                        echo '<i class="fa-regular fa-star"></i>';
                                    }
                                    ?>
                                </div>
                                <div class="price-btn">
                                    <a href="<?php the_permalink($product->ID); ?>" class="btn"><?php echo pll_e('Order Now'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/single-product.js"></script>

<?php endwhile; 
get_footer();
?>
