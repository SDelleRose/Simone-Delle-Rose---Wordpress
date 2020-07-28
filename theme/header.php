<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header>
        <div class="logo"><?php the_custom_logo(); ?></div>

        <div class="nav">
 <!-- icon for main navigation in mobile device--> <div id='icon_nav'><span></span><span></span><span></span></div>

            <div id='nav_elements'>

                <?php /* main navigation */
                wp_nav_menu(array(
                    'theme_location' => 'header',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => ''
                ));
                ?>
            </div>
        </div>

        <div class="title" style="background-image: url('<?php header_image(); ?>');">

            <!-- text in header image -->
            <?php if (is_front_page()) { ?>
                <!-- Slogan in home page -->
                <h1><?php bloginfo('description') ?></h1>

            <?php } else { ?>
                <!-- Title in other pages -->
                <h1><?php the_title(); ?></h1>

            <?php } ?>

        </div>

    </header>