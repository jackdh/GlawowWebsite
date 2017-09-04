<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site container-fluid" id="page">

    <div class="row">
        <div class="col-lg-2 col-md-3  col-sm-4 header-wrap">
            <!-- ******************* The Navbar Area ******************* -->
            <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

                <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e('Skip to content',
                        'understrap'); ?></a>

                <nav class='small-top-nav'>
                    <div class='container'>
                        <ul>
                            <li class='active'>
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span class="screen-reader-text">View menu</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span class="screen-reader-text">Contact Me</span>
                            </li>
                            <li>
                                <i class="fa fa-github" aria-hidden="true"></i>
                                <span class="screen-reader-text">Go to my github</span>
                            </li>
                        </ul>
                    </div>
                </nav>

                <nav class="navbar navbar-expand-md navbar-dark bg-dark large">

                    <?php if ('container' == $container) : ?>
                    <div class="">
                        <?php endif; ?>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Your site title as branding in the menu -->
                        <?php if (!has_custom_logo()) {

                            if (is_front_page() && is_home()) : ?>

                                <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                                                 title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><?php bloginfo('name'); ?></a>
                                </h1>

                            <?php else : ?>
                                <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                   title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><?php bloginfo('name'); ?></a>

                            <?php endif; } else { ?>

                            <div class='container'>
                                <?php the_custom_logo(); ?>
                            </div>
                            <div class='container blog-info-name'>
                                <a class='navbar-brand' rel='home' href='<?php echo esc_url(home_url('/')); ?>'
                               title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'><?php bloginfo('name'); ?></a>
                            </div>
                            <!-- end custom logo -->
                        <?php } ?>


                        <!-- The WordPress Menu goes here -->
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'navbarNavDropdown',
                                'menu_class' => 'navbar-nav',
                                'fallback_cb' => '',
                                'menu_id' => 'main-menu',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            )
                        ); ?>
                        <?php if ('container' == $container) : ?>
                    </div><!-- .container -->
                <?php endif; ?>

                </nav><!-- .site-navigation -->

            </div><!-- .wrapper-navbar end -->
        </div>
        <div class="col main-wrap">

