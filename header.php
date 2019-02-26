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
        <div class="brand__graphic">Rams International</div>
      </div>

      <div class="nav-menu">
        <div class="nav-menu__middle"></div>
      </div>

      <div class="nav-menu__content">
        <ul class="nav-menu__item">
          <li><a href="<?php echo get_site_url()?>">Home</a></li>
          <li><a href="<?php echo get_site_url().'/bath-tubs?cat=16'?>">Bath Tubs</a></li>
          <li><a class="drop">FarmHouse Sink</a>
            <ul class="nav-menu__item__sub">
              <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks/single-bowl?cat=19'?>">Single Bowl</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks/double-bowls?cat=18'?>">Double Bowl</a></li>
            </ul>
          </li>
          <li><a class="drop">UnderMount Sinks</a>
            <ul class="nav-menu__item__sub">
              <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks/single-bowls?cat=21'?>">Single Bowl</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks/double-bowls?cat=22'?>">Double Bowl</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_site_url().'/index.php/basin-sinks?cat=23'?>">Basin Sinks</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/pedestal-sinks?cat=24'?>">Pedestal Sinks</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/about'?>">About</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/contact'?>">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- End Main Header -->
