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
        <a href="<?php echo get_site_url();?>">
          <div class="brand__graphic">Rams International</div>
        </a>
      </div>

      <div class="nav-menu">
        <div class="nav-menu__middle"></div>
      </div>

      <div class="nav-menu__content">
        <ul class="nav-menu__item">
          <li><a href="<?php echo get_site_url()?>">Home</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/bath-tubs?cat=2'?>">Bath Tubs</a></li>
          <li><a class="drop">Farm House Sinks</a>
            <ul class="nav-menu__item__sub">
              <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks/single-bowl?cat=4'?>">Single Bowl</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks/double-bowl?cat=5'?>">Double Bowl</a></li>
            </ul>
          </li>
          <li><a class="drop">Under Mount Sinks</a>
            <ul class="nav-menu__item__sub">
              <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks/single-bowl?cat=7'?>">Single Bowl</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks/double-bowl?cat=8'?>">Double Bowl</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_site_url().'/index.php/basin-sinks?cat=9'?>">Basin Sinks</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/pedestal-sinks?cat=10'?>">Pedestal Sinks</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/about-us'?>">About</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/contact'?>">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- End Main Header -->
