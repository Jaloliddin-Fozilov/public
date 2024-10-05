<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ghpharm
 */

?>

<footer>
    <div class="container">
        <div class="footer-info-wrapper">
            <div class="footer-company-info">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/white-logo.png" alt="logo">
				<?php if (is_active_sidebar('footer-text-widget')) : ?>
					<div class="footer-text-widget-area">
						<?php dynamic_sidebar('footer-text-widget'); ?>
					</div>
				<?php endif; ?>
                <div class="icon-box">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            
          
            <div class="links first-links">
                <h2 class="title">FOYDALI HAVOLALAR</h2>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-1',
                        'menu_class' => 'links-list',
                        'container' => false,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    ));
                ?>
            </div>
            
            <div class="links second-links">
                <h2 class="title">FOYDALI HAVOLALAR</h2>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-2',
                        'menu_class' => 'links-list',
                        'container' => false,
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    ));
                ?>
            </div>
            
            <div class="contact">
                <h2 class="title">BOG'LANISH</h2>
                <p>Toshkent shahar, Amir Temur ko’chasi 2 uy</p>
                <div class="company-socials">
                    <div>
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="tel:+998777777777">+998 77 777 77 77</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:email@example.com">email@example.com</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-globe"></i>
                        <a href="https://www.site.com" target="_blank">www.site.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="fot-leav">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/fot-leav-blur.png" alt="" class="fot-leav1">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/fot-leav-blur2.png" alt="" class="fot-leav2">
    </div>
</footer>

<div class="copyright-box">
    <div class="container">
        <p><?php echo pll_e('Copyright © 2024 Barcha huquqlar himoyalangan');?></p>
    </div>
</div>
<?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>

    <!---------- connect owl carouse js/jquery ---------->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>	

</body>
</html>
