<!DOCTYPE html>
<html <?php language_attributes();?>>

  <head>
    <?php
      wp_head();
      ?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-57x57.png'?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-60x60.png'?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-72x72.png'?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-76x76.png'?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-114x114.png'?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-120x120.png'?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-144x144.png'?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-152x152.png'?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/assets/Favicons/apple-icon-180x180.png'?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri() . '/assets/Favicons/android-icon-192x192.png'?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/assets/Favicons/favicon-32x32.png'?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/assets/Favicons/favicon-96x96.png'?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/assets/Favicons/favicon-16x16.png'?>">
    <link rel="manifest" href="<?php echo get_template_directory_uri() . '/assets/Favicons/manifest.json'?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/assets/Favicons/ms-icon-144x144.png'?>">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body <?php echo body_class();?> oncontextmenu="return false">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?php echo get_site_url()?>">
      <img src=<?php echo get_template_directory_uri()."/assets/logo.png"?> width="65" height="65" alt="Rams International Logo">
        <span class="toggle-brand ">Rams International</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo get_site_url()?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url().'/about-us'?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url().'/contact-us'?>">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
    
    <!-- End Main Header -->