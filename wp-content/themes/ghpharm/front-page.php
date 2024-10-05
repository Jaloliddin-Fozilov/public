<?php
get_header();

?>

<?php if( have_rows('slide') ): ?>
    <header class="section header">
        <div class="owl-carousel owl-theme">
            <?php while( have_rows('slide') ): the_row(); 
                // Get sub field values
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $button_text = get_sub_field('button_text');
                $button_link = get_sub_field('button_link');
                $background_image = get_sub_field('background_image');
            ?>
                <div class="item item1"">
                    <div class="leafs">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/leavs.png" alt="" class="sec-leaf">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leav2.png" alt="" class="sec-leaf">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-leaf.png" alt="" class="sec-leaf">
                    </div>
                    <div class="container">
                        <div class="section-title">
                            <p class="subtitle">
                                <?php echo esc_html($subtitle); ?>
                            </p>
                            <h1 class="title"><?php echo esc_html($title); ?></h1>
                            <?php if($button_text && $button_link): ?>
                                <a class="btn" href="<?php echo esc_url($button_link); ?>" class="btn"><?php echo esc_html($button_text); ?></a>
                            <?php endif; ?>
                        </div>

                        <div class="some-images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gingerpng.png" alt="" class="our-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dori-bg.png" alt="" class="bg-dori">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tea.png" alt="" class="our-img">
                            <div class="pill-wrap">
                                <img src="<?php echo esc_url($background_image); ?>" alt="" class="pills">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </header>
<?php endif; ?>


<?php 
$sponsors_group = get_field('sponsors'); 

if( $sponsors_group ): 
    $title = $sponsors_group['title']; // Access the title inside the group
    $sponsors_repeater = $sponsors_group['brands']; // Access the repeater inside the group
?>
    <div class="sponsors">
        <div class="details">
            <span class="left-detail"></span>
            <p class="spon-title"><?php echo esc_html($title); // Output the title ?></p>
            <span class="right-detail"></span>
        </div>
        <div class="owl-carousel icon-wrapper owl-theme line-indicators">
            <?php if( $sponsors_repeater ): // Check if the repeater has rows ?>
                <?php foreach( $sponsors_repeater as $sponsor ): // Loop through each row in the repeater ?>
                    <div class="item">
                        <div class="icon-box">
                            <?php if( $sponsor ): // Check if the image exists ?>
                                <img src="<?php echo esc_url($sponsor['brand']); ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

    <!--  Header End  -->

    <!-- Healty START-->
    <section class="healty">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-hed.png" alt="" class="tolqin">
        <div class="container">
            <div class="healty-item-wrap">
            <?php if( have_rows('features') ): ?>
                <?php while( have_rows('features') ): the_row(); 
                // Get sub field values
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $icon = get_sub_field('icon');
            ?>
                <div class="healty-item">
                    <img src="<?php echo esc_html($icon); ?>" alt="">
                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo esc_html($subtitle); ?></p>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="healty-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/features.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/healty-leaf.png" alt="" class="healty-leaf">
            </div>
        </div>

    </section>
    <!-- Healty end-->


    <section class="pill-section">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-fot.png" alt="" class="tolqin-pas">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/big-circle.png" alt="" class="big-circle">

        <div class="container">
            <div class="pill-item-wraper">
                <?php
                    $product_1 = get_field('product_1');
                    $product_2 = get_field('product_2');
                    $product_3 = get_field('product_3');
                ?>
                <div class="pill-item">
                    <div class="bg-pill">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $product_1->ID ), 'full')[0]; ?>" alt="">
                    </div>
                    <div class="about-pill">
                        <h1 class="name-pill"><?php echo esc_html($product_1->post_title); ?></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qanot.png" alt="" class="qanot">
                        <h5 class="doza"><?php the_field('subtitle', $product_1->ID) ?></h5>
                        <p class="pill-about"><?php the_field('short_descssription', $product_1->ID) ?></p>
                        <div class="price-btn">
                            <a href="<?php the_permalink($product_1->ID) ?>" class="btn"><?php pll_e('Batafsil'); ?></a>
                            <h1 class="price"><?php the_field('price', $product_1->ID) ?></h1>
                           <?php if( get_field('dicount_price', $product_1->ID)) ?> <h3 class="old-price"><del><?php the_field('dicount_price', $product_1->ID) ?></del></h3>
                        </div>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle.png" alt="" class="circle">
                <div class="pill-item">
                <div class="about-pill">
                        <h1 class="name-pill"><?php echo esc_html($product_2->post_title); ?></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qanot.png" alt="" class="qanot">
                        <h5 class="doza"><?php the_field('subtitle', $product_2->ID) ?></h5>
                        <p class="pill-about"><?php the_field('short_descssription', $product_2->ID) ?></p>
                        <div class="price-btn">
                            <a href="<?php the_permalink($product_2->ID) ?>" class="btn"><?php pll_e('Batafsil'); ?></a>
                            <h1 class="price"><?php the_field('price', $product_2->ID) ?></h1>
                           <?php if( get_field('dicount_price', $product_2->ID)) ?> <h3 class="old-price"><del><?php the_field('dicount_price', $product_2->ID) ?></del></h3>
                        </div>
                    </div>
                    <div class="bg-pill">
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $product_2->ID ), 'full')[0]; ?>" alt="">
                    </div>

                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle.png" alt="" class="circle">
                <div class="pill-item">
                    <div class="bg-pill">
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $product_3->ID ), 'full')[0]; ?>" alt="">
                    </div>
                    <div class="about-pill">
                        <h1 class="name-pill"><?php echo esc_html($product_3->post_title); ?></h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qanot.png" alt="" class="qanot">
                        <h5 class="doza"><?php the_field('subtitle', $product_3->ID) ?></h5>
                        <p class="pill-about"><?php the_field('short_descssription', $product_3->ID) ?></p>
                        <div class="price-btn">
                            <a href="<?php the_permalink($product_3->ID) ?>" class="btn"><?php pll_e('Batafsil'); ?></a>
                            <h1 class="price"><?php the_field('price', $product_3->ID) ?></h1>
                           <?php if( get_field('dicount_price', $product_3->ID)) ?> <h3 class="old-price"><del><?php the_field('dicount_price', $product_3->ID) ?></del></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

    <?php 
$youtube_video = get_field('youtube_video'); 

if( $youtube_video ): 
    $video_id = $youtube_video['video_id']; // Access the title inside the group
    $background_image = $youtube_video['background_image']; // Access the repeater inside the group
?>
    <div class="backdrop"></div>
    <div class="modal">
        <iframe width="1000" height="100" src="https://www.youtube.com/embed/<?php echo esc_html($video_id); ?>"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-hed-white.png" alt="" class="play-hed">
    <div class="play-wrap" id="video">
        <div class="play-video">
            <img src="<?php echo esc_url($background_image); ?>" alt="" class="play-bg">
            <div class="play-leafs">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leav.png" alt="" class="sec-leaf">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blur-leav2.png" alt="" class="sec-leaf">
            </div>
            <a href="#video" class="tube-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Link.png" alt="" class="video-link"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-border.png" alt="" class="play-fot">
        </div>
    </div>


    <?php endif; ?>

    <?php 
$statistics = get_field('statistics'); 

if( $statistics ): 
    
?>


    <div class="container">
        <div class="statistic">
            <div class="statistic-card">
                <div class="card-img-box first-card">
                    <p><?php echo esc_html($statistics['percent_1']); ?>%</p>
                </div>
                <div class="statistic-info">
                    <h4 class="title"><?php echo esc_html($statistics['first_title']); ?></h4>
                    <p><?php echo esc_html($statistics['subtitle_1']); ?></p>
                </div>
            </div>
            <div class="statistic-card main-card">
                <div class="card-img-box main-card">
                    <p><?php echo esc_html($statistics['percent_2']); ?>%</p>
                </div>
                <div class="statistic-info">
                    <h4 class="title"><?php echo esc_html($statistics['second_title']); ?></h4>
                    <p><?php echo esc_html($statistics['subtitle_2']); ?></p>
                </div>
            </div>
            <div class="statistic-card">
                <div class="card-img-box last-card">
                    <p><?php echo esc_html($statistics['percent_3']); ?>%</p>
                </div>
                <div class="statistic-info">
                    <h4 class="title"><?php echo esc_html($statistics['thrid_title']); ?></h4>
                    <p><?php echo esc_html($statistics['subtitle_3']); ?></p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .statistic .statistic-card .first-card {
            background: conic-gradient(var(--orange) calc(<?php echo esc_html($statistics['percent_1']); ?>*3.6deg), #F4F4F4 0deg);
        }

        .statistic .statistic-card .main-card {
            background: conic-gradient(var(--orange) calc(<?php echo esc_html($statistics['percent_2']); ?>*3.6deg), #F4F4F4 0deg);
        }

        .statistic .statistic-card .last-card {
            background: conic-gradient(var(--orange) calc(<?php echo esc_html($statistics['percent_3']); ?>*3.6deg), #F4F4F4 0deg);
        }

    </style>
    <?php endif; ?>
    
    <?php 
        $fit_info_blok = get_field('fit_info_blok'); 

        if( $fit_info_blok ): 
            
        ?>
    <!-- Protein start-->
    <section class="protein-section">
        <div class="container">
            <div class="protein-box">
                <div class="protein-img-box">
                    <img src="<?php echo esc_url($fit_info_blok['image']); ?>" alt="">
                </div>
                <div class="about-protein">
                    <p class="subtitle"><?php echo esc_html($fit_info_blok['subtitle']); ?></p>
                    <h2 class="title"><?php echo esc_html($fit_info_blok['title']); ?></h2>
                    <div class="protein-info">
                        <?php if($fit_info_blok['info_items'] ): 
                            foreach($fit_info_blok['info_items'] as $item):; 
                            // Get sub field values
                            $item_title = $item['item_title'];
                            $item_subtitle = $item['item_subtitle'];
                            $item_image = $item['item_image'];
                            ?>
                        <div class="info-card">
                            <div class="info-img-box">
                                <img src="<?php echo esc_url($item_image); ?>" alt="img">
                            </div>
                            <div class="info-title">
                                <span class="line"></span>
                                <h4><?php echo esc_html($item_title); ?></h4>
                            </div>
                            <p><?php echo esc_html($item_subtitle); ?></p>
                        </div>
                        <?php endforeach;
                            endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Protein end-->
    <?php endif; ?>

    <a href="#" class="to-top"><i class="fa-solid fa-angle-up"></i></a>

    <?php 
$about_us = get_field('about_us'); 

if( $about_us ): ?>
    <!-- About start-->
    <section class="about-us">
        <div class="container">
            <div class="top-border-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-hed-white.png" alt="img" class="about-top">
            </div>
            <div class="about">
                <div class="company-info">
                    <p class="subtitle"><?php echo esc_html($about_us['subtitle']); ?></p>
                    <h2 class="title"><?php echo esc_html($about_us['title']); ?></h2>
                    <ul class="info-lists">
                        <?php if($about_us['info_items'] ):
                            foreach($about_us['info_items'] as $item):;
                          
                            ?>
                        <li class="lists-item"><?php echo esc_html($item['info_item']); ?></li>
                        <?php endforeach;
                            endif; ?>
                    </ul>
                    <a href="<?php echo esc_url($about_us['button_link']); ?>" class="btn"><?php echo esc_html($about_us['button_text']); ?></a>
                </div>
                <div class="pills-img-box">
                    <img src="<?php echo esc_url($about_us['image']); ?>" alt="img">
                </div>
            </div>
        </div>
        <div class="bottom-border-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section-fot-white.png" alt="img">
        </div>
    </section>
    <!-- About end-->
    <?php endif; ?>

    <!---------- Testimonial START ---------->
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-slider">
                <div class="owl-carousel owl-theme line-indecators">
                    <?php
                    $testimonials = get_field('testimonial');
                    if ($testimonials) :
                        foreach ($testimonials as $key => $testimonial) :
                                
                    ?>
                    <div class="item">
                    <?php
                        $rating = $testimonial['rating']; 
                        $total_stars = 5;

                        echo '<div class="star-box">';

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

                        echo '</div>';
                        ?>
                        <div class="testimonial-item">
                            <p><?php echo esc_html($testimonial['comment']); ?></p>
                            <div class="testimonial-info">
                                <div class="client">
                                    <div class="client-img-box">
                                        <img src="<?php echo esc_url($testimonial['image']); ?>" alt="img">
                                    </div>
                                    <h2 class="title"><?php echo esc_html($testimonial['name']); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-border.png" alt="" class="doctor-border-top">

    </section>
    <!---------- Testimonial END ---------->

    <section class="doctors">
        <div class="container">
            <div class="cards-wrapper">
                <?php 
                $doctors = get_field('doctors');
                if($doctors):
                    foreach($doctors as $key => $doctor):
                ?>
                <div class="doctors-card">
                    <div class="doctors-img-box">
                        <img src="<?php echo esc_url($doctor['doctor_image']); ?>" alt="img">
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>

    </section>

<?php
get_footer();
