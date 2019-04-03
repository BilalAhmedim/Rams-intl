<!DOCTYPE html>
<html <?php language_attributes();?>>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

          <li><a href="javascript:void(0)">Copper Kitchen &amp; Bathtubs</a>

            <ul>
              <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/bath-tubs?cat=2'?>">Bath Tubs</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/hoods?cat=2'?>">Hoods</a></li>
              <li><a href="javascript:void(0)">Farm House Sinks</a>

                <ul>
                  <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/farm-house-sinks/single-bowl?cat=2'?>">Single Bowl</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/farm-house-sinks/double-bowl?cat=2'?>">Double Bowl</a></li>
                </ul>

              </li>
              <li><a href="javascript:void(0)">Under Mount Sinks</a>

                <ul>
                  <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/under-mount-sinks/single-bowl?cat=2?cat=2'?>">Single Bowl</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/under-mount-sinks/double-bowl?cat=2'?>">Double Bowl</a></li>
                </ul>
              </li>

              <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/basin?cat=2'?>">Basin</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/pedestal?cat=2'?>">Pedestal</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/tiles?cat=2'?>">Tiles</a></li>
            </ul>

          </li>

          <li><a href="javascript:void(0)">Handicrafts</a>

            <ul>
              <li><a href="<?php echo get_site_url().'/index.php/handicrafts/utensils-tableware?cat=2'?>">Utensils & Tableware</a></li>
              <li><a href="javascript:void(0)">Wall Décor</a>

                <ul>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/mirrors?cat=2'?>">Mirrors</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/wall-shelves?cat=2'?>">Wall Shelves</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/hooks?cat=2'?>">Hooks</a></li>
                </ul>

              </li>
              <li><a href="javascript:void(0)">Furniture</a>

                <ul>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/accent-table-chairs?cat=2'?>">Accent Table & Chairs</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/coffee-tables?cat=2'?>">Coffee tables</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/stools?cat=2'?>">Stools</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/cabinets?cat=2'?>">Cabinets</a></li>
                </ul>

              </li>

              <li><a href="javascript:void(0)">Lamps & Lighting</a>

                <ul>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/lanterns?cat=2'?>">Lanterns</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/votive?cat=2'?>">Votives</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/table-lamps?cat=2'?>">Table Lamp</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/floor-lamps?cat=2'?>">Floor Lamps</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/pendants?cat=2'?>">Pendants</a></li>
                </ul>

              </li>

              <li><a href="javascript:void(0)">Garden</a>

                <ul>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/garden/vases?cat=2'?>">Vases</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/garden/planters?cat=2'?>">Planters</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/handicrafts/garden/decor-items?cat=2'?>">Décor Items</a></li>
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