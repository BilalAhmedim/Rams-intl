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
            <a href="<?php echo get_template_directory_uri().'/index.php/about-us'?>" class="about-a">Read More</a>
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

    <div class="container-fluid text-center">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/baths_.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."/products/bath?category_name=cat1"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/hoods.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

            </div>

          </div>


          <div class="col-lg-6">

            <div class="row">

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/farmhouse_single_.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/farmhouse_double_.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

            </div>

          </div>


        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/undermount_single_.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/undermount_double_.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

            </div>

          </div>


          <div class="col-lg-6">

            <div class="row">

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/basin_.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/pedestal_.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

            </div>

          </div>


        </div>


        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/copper_tiles_.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/utensils_and_tableware.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

            </div>

          </div>


          <div class="col-lg-6">

            <div class="row">

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/mirrors.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-6">
                <figure class="gallery__inner">
                  <img src=<?php echo get_template_directory_uri()."/assets/thumb/wall_shelves.jpg"?> alt="Bath Tubs" class="img-responsive">
                  <figcaption class"figcaption">
                    <div class="gallery__inner__caption">
                      <h5>FigCaption Header</h5>
                      <a href=<?php echo get_site_url()."#"?> >View More</a>
                    </div>
                  </figcaption>
                </figure>
              </div>

            </div>

          </div>


        </div>


      </div>

  </div>
</div>
<!-- End Gallery -->

<?php get_footer();?>
