<!DOCTYPE html>
<html <?php language_attributes();?>>
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
  <head>
    <?php
      wp_head();
      ?>
  </head>
  <body <?php echo body_class();?>>
    <header class="main-header">
      <nav class="navigation">
        <div class="brand">
          <a href="<?php echo get_site_url();?>">Rams International</a>
        </div>
        <div class="nav-menu nav-menu__toggle">
          <div class="nav-menu__middle"></div>
        </div>
        <div class="nav-menu__content">
          <ul class="nav-menu__item">
            <li><a href="<?php echo get_site_url()?>">Home</a></li>
            <li>
              <a href="javascript:void(0)">Products</a>
              <ul>
                <li>
                  <a href="javascript:void(0)">Copper Kitchen &amp; Bathtubs</a>
                  <ul>
                    <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/bath-tubs?category_name=bath-tubs'?>">Bath Tubs</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/hoods?category_name=hoods'?>">Hoods</a></li>
                    <li>
                      <a href="javascript:void(0)">Farm House Sinks</a>
                      <ul>
                        <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/farm-house-sinks/single-bowl?category_name=farm-house-single-bowl'?>">Single Bowl</a></li>
                        <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/farm-house-sinks/double-bowl?category_name=farm-house-double-bowl'?>">Double Bowl</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Under Mount Sinks</a>
                      <ul>
                        <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/under-mount-sinks/single-bowl?category_name=under-mount-single-bowl'?>">Single Bowl</a></li>
                        <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/under-mount-sinks/double-bowl?category_name=under-mount-double-bowl'?>">Double Bowl</a></li>
                      </ul>
                    </li>
                    <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/basin?category_name=basin'?>">Basin</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/pedestal?category_name=pedestal'?>">Pedestal</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/tiles?category_name=tiles'?>">Tiles</a></li>
                  </ul>
                </li>
              </ul>
              <ul>
                <li><a href="<?php echo get_site_url().'/index.php/handicrafts/utensils-tableware?category_name=utensils-tableware'?>">Utensils & Tableware</a></li>
                <li>
                  <a href="javascript:void(0)">Wall Decor</a>
                  <ul>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/mirrors?category_name=mirrors'?>">Mirrors</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/wall-shelves?category_name=wall-shelves'?>">Wall Shelves</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/hooks?category_name=hooks'?>">Hooks</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)">Furniture</a>
                  <ul>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/accent-table-chairs?category_name=accent-table-chairs'?>">Accent Table & Chairs</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/coffee-tables?category_name=coffee-tables'?>">Coffee Tables</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/stools?category_name=stools'?>">Stools</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)">Lamps & Lighting</a>
                  <ul>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/lanterns?category_name=lanterns'?>">Lanterns</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/votive?category_name=votive'?>">Votive</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/table-lamps?category_name=table-lamps'?>">Table Lamps</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/floor-lamps?category_name=floor-lamps'?>">Floor Lamps</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/pendants?category_name=pendants'?>">Pendants</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)">Garden</a>
                  <ul>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/garden/vases?category_name=vases'?>">Vases</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/garden/planters?category_name=planters'?>">Planters</a></li>
                    <li><a href="<?php echo get_site_url().'/index.php/handicrafts/garden/decor-items?category_name=decor-items'?>">Decor Items</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo get_site_url().'/index.php/about-us'?>">About</a></li>
            <li><a href="<?php echo get_site_url().'/index.php/contact-us'?>">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- End Main Header -->