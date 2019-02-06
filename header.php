<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    wp_head();
  ?>
</head>

<body>
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
          <li><a href="<?php echo get_site_url().'/index.php/bathtubs'?>">Bathtubs</a></li>
          <li><a class="drop">FarmHouse Sink</a>
            <ul class="nav-menu__item__sub">
              <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks/farmhouse-single-bowl'?>">Single Bowl</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks/farmhouse-Double-bowl'?>">Double Bowl</a></li>
            </ul>
          </li>
          <li><a class="drop">UnderMount Sinks</a>
            <ul class="nav-menu__item__sub">
              <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks/under-mount-single-bowl'?>">Single Bowl</a></li>
              <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks/under-mount-double-bowl'?>">Double Bowl</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_site_url().'/index.php/basin-sinks'?>">Basin Sinks</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/pedestal'?>">Pedestal</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/about'?>">About</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/contact'?>">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- End Main Header -->
