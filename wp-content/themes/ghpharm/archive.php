<?php
get_header(); // Headerni yuklash
?>

<div class="container">
    <h1 class="page-title">
        <?php 
        // Arxiv sarlavhasini ko'rsatish
        if (is_category()) {
            single_cat_title();
        } elseif (is_tag()) {
            single_tag_title();
        } elseif (is_author()) {
            the_post();
            echo 'Posts by ' . get_the_author();
            rewind_posts();
        } elseif (is_day()) {
            echo 'Day: ' . get_the_date();
        } elseif (is_month()) {
            echo 'Month: ' . get_the_date('F Y');
        } elseif (is_year()) {
            echo 'Year: ' . get_the_date('Y');
        } else {
            echo 'Archives';
        }
        ?>
    </h1>

    <?php if (have_posts()) : ?>
        <div class="news-list">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="post-thumbnail">
                        <?php 
                        // Post uchun rasmni ko'rsatish
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        }
                        ?>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-meta">
                            <span class="post-date"><?php echo get_the_date(); ?></span>
                            <span class="post-author">By <?php the_author_posts_link(); ?></span>
                        </div>
                        <div class="post-excerpt">
                            <?php the_excerpt(); // qisqa tavsifni chiqarish ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="read-more"><?php pll_e('Read More'); ?></a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php 
            // Pagination (sahifalarni ko'rsatish)
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('&laquo; Previous', 'textdomain'),
                'next_text' => __('Next &raquo;', 'textdomain'),
            )); 
            ?>
        </div>
    <?php else : ?>
        <p><?php pll_e('No posts found.'); ?></p>
    <?php endif; ?>
</div>

<?php
get_footer(); // Footerni yuklash
?>
