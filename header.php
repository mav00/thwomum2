<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head profile="http://gmpg.org/xfn/11">
   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
   <title><?php wp_title(' - ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   <?php wp_head(); ?>
    
</head>
<body>
<div id="wrapper_all">
    <div id="header">
        <div id="header_logo">
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
            <img src="<?php echo $image[0]; ?>" alt="">
        </div><!-- end of #header_logo -->
        <!--- <h1><?php bloginfo('name'); ?></h1> --->
        <!--- <h3><?php bloginfo('description'); ?></h3> --->
        <div id="header_menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
    </div><!-- header -->
    <div id="wrapper_content">


 