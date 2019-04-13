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
        <div class="col-md-12">
          <p>
            We are leading Manufacturers exporters of Copper bathtubs, Wash Basins & Kitchen Sinks (Copper & Stainless
            steel) we also makes items for home décor. Rams International, established in 2003, it has been only over
            the last 16 years, we have experienced the tremendous change that has brought us to where we are today.
          </p>
          <div class="button">
            <a href="<?php echo get_site_url().'/index.php/about-us'?>" class="about-a">Read More</a>
          </div>
        </div>
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
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/bath-tubs?category_name=bath-tubs'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/hoods.jpg"?> alt="Copper Hoods" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Copper Hoods</h5>
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/hoods?category_name=hoods'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/farmhouse_single_.jpg"?> alt="Farm House Sinks Single Bowl" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Farm House Sinks Single Bowl</h5>
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/farm-house-sinks/single-bowl?category_name=farm-house-sinks-single-bowl'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/farmhouse_double_.jpg"?> alt="Farm House Sinks Double Bowl" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Farm House Sinks Double Bowl</h5>
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/farm-house-sinks/double-bowl?category_name=farm-house-sinks-double-bowl'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/undermount_single_.jpg"?> alt="Under Mount Sink Single Bowl" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Under Mount Sink Single Bowl</h5>
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/under-mount-sinks/single-bowl?category_name=under-mount-sinks-single-bowl'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/undermount_double_.jpg"?> alt="Under Mount Sink Double Bowl" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Under Mount Sink Double Bowl</h5>
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/under-mount-sinks/double-bowl?category_name=under-mount-sinks-double-bowl'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/basin_.jpg"?> alt="Copper Basin Sinks" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Copper Basin Sinks</h5>
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/basin?category_name=basin'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/pedestal_.jpg"?> alt="Copper Pedestal Sinks" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Copper Pedestal Sinks</h5>
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/pedestal?category_name=pedestal'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/copper_tiles_.jpg"?> alt="Copper Tiles" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Copper Tiles</h5>
              <a href="<?php echo get_site_url().'/index.php/copper-kitchen-bathtubs/tiles?category_name=tiles'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <!-- Copper Products -->

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/utensils_and_tableware.jpg"?> alt="Utensils and Tableware" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Utensils and Tableware</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/utensils-tableware?category_name=utensils-tableware'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/mirrors.jpg"?> alt="Mirrors" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Mirrors</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/mirrors?category_name=mirrors'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/wall_shelves.jpg"?> alt="Wall Shelves" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Wall Shelves</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/wall-shelves?category_name=wall-shelves'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/hooks.jpg"?> alt="Hooks" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Hooks</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/wall-decor/hooks?category_name=hooks'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/accent_table_chairs.jpg"?> alt="Accent Table &amp; Chairs" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Accent Table &amp; Chairs</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/accent-table-chairs?category_name=accent-table-chairs'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/coffee_table.jpg"?> alt="Coffee Table" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Coffee Table</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/coffee-tables?category_name=coffee-tables'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/stools.jpg"?> alt="Stools" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Stools</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/furniture/stools?category_name=stools'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/lanterns.jpg"?> alt="Lanterns" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Lanterns</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/lanterns?category_name=lanterns'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/votive.jpg"?> alt="Votive" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Votive</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/votive?category_name=votive'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/table_lamps.jpg"?> alt="Table Lamps" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Table Lamps</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/table-lamps?category_name=table-lamps'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/floor_lamps.jpg"?> alt="Floor Lamps" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Floor Lamps</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/floor-lamps?category_name=floor-lamps'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/pendants.jpg"?> alt="Pendants" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Pendants</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/lamps-lighting/pendants?category_name=pendants'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/vases.jpg"?> alt="Vases" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Vases</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/garden/vases?category_name=vases'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/planters.jpg"?> alt="Planters" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Planters</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/garden/planters?category_name=planters'?>">View More</a>
            </div>
          </figcaption>
        </figure>

        <figure class="gallery__inner">
          <img src=<?php echo get_template_directory_uri()."/assets/thumb/decore_item.jpg"?> alt="Decore Item" class="img-responsive">
          <figcaption>
            <div class="gallery__inner__caption">
              <h5>Decore Item</h5>
              <a href="<?php echo get_site_url().'/index.php/handicrafts/garden/decor-items?category_name=decor-items'?>">View More</a>
            </div>
          </figcaption>
        </figure>

      </div>

    </div>

  </div>
</div>
<!-- End Gallery -->

<?php get_footer();?>
