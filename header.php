<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental-Health</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/navigation.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
    <?php wp_head (); ?>
</head>
<body>
    
    
    <!-- Start Header -->

    <?php if ( have_rows( 'header' ) ) : ?>
        <?php while ( have_rows( 'header' ) ) : the_row(); ?>
            <header class="header">
                <img src="<?php $im = get_sub_field( 'im' );echo $im['url']; ?>" alt="Path" class="img-fluid path1">
                <!-- Logo -->
                <a href="#" class="logo">
                    <img src="<?php $logo = get_sub_field( 'logo' );echo $logo['url']; ?>" alt="" class="img-fluid">
                </a>

                <!-- Hamburger -->
                <div class="hamburger" id="hamburger">
                    <div class="bar" id="top"></div>
                    <div class="bar" id="middle"></div>
                    <div class="bar" id="bottom"></div>
                </div>

                <!-- Main Menu -->
                        <ul class="menu">
                        <?php if ( have_rows( 'links' ) ) : ?>
                            <?php while ( have_rows( 'links' ) ) : the_row(); ?>
                                <li class="menu-item"><a href="#"><?php the_sub_field( 'link' ); ?></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </ul>
                <img src="<?php $imgs = get_sub_field( 'imgs' );echo $imgs['url']; ?>" alt="Path" class="img-fluid path8">
            </header>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- End Header -->