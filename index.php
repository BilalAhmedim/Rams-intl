<?php get_header();?>
<div class="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src=<?php echo get_template_directory_uri()."/assets/Slider/sink.jpg" ?> alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src=<?php echo get_template_directory_uri()."/assets/Slider/tub.jpg"?> alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src=<?php echo get_template_directory_uri()."/assets/Slider/3.jpg"?> alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- End Slider -->

<div class="about">
  <div class="about__wrapper">
    <div class="section-header">
      <h1>About Us</h1>
    </div>

    <div class="container text-center">
      <div class="row">
        <p>
          We are leading Manufacturers exporters of Copper bathtubs, Wash Basins & Kitchen Sinks (Copper & Stainless
          steel) we also makes items for home décor. Rams International, established in 2003, it has been only over
          the last 16 years, we have experienced the tremendous change that has brought us to where we are today.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- End About -->

<div class="gallery">
  <div class="gallery__wrapper">

    <div class="section-header">
      <h1>Our Products</h1>
    </div>

    <div class="container text-center">

      <div class="row">

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/baths_.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Bath Tubs</h5>
              <a href="<?php echo get_site_url().'/bath-tubs?cat=16'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/farmhouse_single_.jpg"?> alt="Farm House Sinks Single Bowl" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Farm House Sinks Single Bowl</h5>
              <a href="<?php echo get_site_url().'/index.php/farm-house-sinks/single-bowl?cat=19'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/farmhouse_double_.jpg"?> alt="Farm House Sinks Double Bowl" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Farm House Sinks Double Bowl</h5>
              <a href="<?php echo get_site_url().'/index.php/farm-house-sinks/double-bowls?cat=18'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/undermount_single_.jpg"?> alt="Under Mount Sink Single Bowl" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Under Mount Sink Single Bowl</h5>
              <a href="<?php echo get_site_url().'/index.php/under-mount-sinks/single-bowls?cat=21'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/undermount_double_.jpg"?> alt="Under Mount Sink Double Bowl" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Under Mount Sink Double Bowl</h5>
              <a href="<?php echo get_site_url().'/index.php/under-mount-sinks/double-bowls?cat=22'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/basin_.jpg"?> alt="Copper Basin Sinks" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Copper Basin Sinks</h5>
              <a href="<?php echo get_site_url().'/index.php/basin-sinks?cat=23'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/pedestal_.jpg"?> alt="Copper Pedestal Sinks" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Copper Pedestal Sinks</h5>
              <a href="<?php echo get_site_url().'/index.php/pedestal-sinks?cat=24'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/copper_tiles_.jpg"?> alt="Copper Tiles" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Copper Tiles</h5>
              <a href="#">View More</a>
            </div>
          </figcaption>
        </figure>

      </div>

    </div>

  </div>
</div>
<!-- End Gallery -->

<?php get_footer();?>
