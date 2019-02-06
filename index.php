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
        <img class="d-block w-100" src=<?php echo get_template_directory_uri()."/assets/Slider/sink2.jpg"?> alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src=<?php echo get_template_directory_uri()."/assets/Slider/tub.jpg"?> alt="Third slide">
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
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/bathtub.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>FigCaption Header</h5>
              <a href="#">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/kitchen.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>FigCaption Header</h5>
              <a href="#">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/roundsinks.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>FigCaption Header</h5>
              <a href="#">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/bathtub.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>FigCaption Header</h5>
              <a href="#">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/bathtub.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>FigCaption Header</h5>
              <a href="#">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/bathtub.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>FigCaption Header</h5>
              <a href="#">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/bathtub.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>FigCaption Header</h5>
              <a href="#">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/bathtub.jpg"?> alt="Bath Tubs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>FigCaption Header</h5>
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
