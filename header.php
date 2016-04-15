<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title("|"); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/style.css" media="all">
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/custom.css" media="all">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
        
        <?php wp_head(); ?>
    </head>
    <body>
        <nav>
            
            <?php
            wp_nav_menu( array(
                "theme_location" => "primary",
                'container'         => 'div',
                'menu_class'        => 'nav navbar-nav',
                'container_class'   => 'container'
                
                ));
            ?>
            
        </nav>
