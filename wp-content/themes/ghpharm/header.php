<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ghpharm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Connect OWL Carousel CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <!-- Navbar START -->
 <nav>
        <div class="wrapper">
            <a href="<?php echo home_url(); ?>"><div class="logo">
                <img src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'medium' )[0]; ?>" width="100">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <button class="nav-tog"><i class="fa-solid fa-chevron-down"></i></button>
            </div></a>
            <div class="menu">
			<ul>
			<?php header_menu(); ?>
			</ul>
                
                <div class="contact-box">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="number">
                <i class="fa-solid fa-phone-flip"></i>
                <p>+998 77 777 77 77</p>
            </div>
            <button type="button" class="open-menu-btn">
                <i class="fa-solid fa-bars" id="open-menu"></i>
            </button>

        </div>

    </nav>
    <!--- Navbar END --->


