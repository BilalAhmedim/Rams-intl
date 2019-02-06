<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    wp_head();
  ?>
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
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
          <li><a href="#">Home</a></li>
          <li><a href="#">Bathtubs</a></li>
          <li><a class="drop">FarmHouse Sink</a>
            <ul class="nav-menu__item__sub">
              <li><a href="#">Single Bowl</a></li>
              <li><a href="#">Double Bowl</a></li>
            </ul>
          </li>
          <li><a class="drop">UnderMount Sinks</a>
            <ul class="nav-menu__item__sub">
              <li><a href="#">Single Bowl</a></li>
              <li><a href="#">Double Bowl</a></li>
            </ul>
          </li>
          <li><a class="drop">Basin Sinks</a>
            <ul class="nav-menu__item__sub">
              <li><a href="#">Single Bowl</a></li>
              <li><a href="#">Double Bowl</a></li>
            </ul>
          </li>
          <li><a href="#">Pedestal</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- End Main Header -->
