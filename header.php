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
              <li><a href="#">Bath Tubs</a></li>
              <li><a href="#">Hoods</a></li>
              <li><a href="javascript:void(0)"> Farm House Sinks</a>

                <ul>
                  <li><a href="#">Single Bowl</a></li>
                  <li><a href="#">Double Bowl</a></li>
                </ul>

              </li>
              <li><a href="javascript:void(0)">Under Mount Sinks</a>

                <ul>
                  <li><a href="#">Single Bowl</a></li>
                  <li><a href="#">Double Bowl</a></li>
                </ul>
              </li>

              <li><a href="#">Basin</a></li>
              <li><a href="#">Pedestal</a></li>
              <li><a href="#">Tiles</a></li>
            </ul>

          </li>

          <li><a href="javascript:void(0)">Handicrafts</a>

            <ul>
              <li><a href="#">Utensils & Tableware</a></li>
              <li><a href="#">Wall Décor</a>

                <ul>
                  <li><a href="#">Mirrors</a></li>
                  <li><a href="#">Wall Shelves</a></li>
                  <li><a href="#">Hooks</a></li>
                </ul>

              </li>
              <li><a href="#">Furniture</a>

                <ul>
                  <li><a href="#">Accent Table & Chairs</a></li>
                  <li><a href="#">Coffee tables</a></li>
                  <li><a href="#">Stools</a></li>
                  <li><a href="#">Cabinets</a></li>
                </ul>

              </li>

              <li><a href="#">Lamps & Lighting</a>

                <ul>
                  <li><a href="#">Lanterns</a></li>
                  <li><a href="#">Votives</a></li>
                  <li><a href="#">Table Lamp</a></li>
                  <li><a href="#">Floor Lamps</a></li>
                  <li><a href="#">Pendants</a></li>
                </ul>

              </li>

              <li><a href="#">Garden</a>

                <ul>
                  <li><a href="#">Vases</a></li>
                  <li><a href="#">Planters</a></li>
                  <li><a href="#">Décor Items</a></li>
                </ul>

              </li>
            </ul>

          </li>

          <li><a href="<?php echo get_site_url().'/index.php/about-us'?>">About</a></li>
          <li><a href="<?php echo get_site_url().'/index.php/contact'?>">Contact</a></li>
        </ul>

      </div>
    </nav>
  </header>
  <!-- End Main Header -->