<footer class="footer">

  <div class="footer__nav text-center">
      <div class="row">
        <div class="col-md-6">
          <div class="row">

            <div class="col-lg-6">
              <div class="footer__nav__copyright footer__divider">
                <div class="brand">
                  <div class="brand__graphic"></div>
                </div>
                <div class="brand__text">
                  <h6>&copy;All Rights Reserved</h6>
                  <h6>Rams International</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="rams-pages footer__divider">
                <div class="section-heading">
                  <h5>Rams Pages</h5>
                </div>
                <ul class="text-justify footer__align--one">
                  <li><a class="active" href="<?php echo get_site_url()?>">Home</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/about'?>">About</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/contact'?>">Contact</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-6">
          <div class="row">

            <div class="col-lg-6">
              <div class="product-pages footer__divider">
                <div class="section-heading">
                  <h5>Products Pages</h5>
                </div>
                <ul class="text-justify footer__align--two">

                  <li><a href="<?php echo get_site_url().'/bath-tubs?cat=16'?>">Bath Tubs</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks?cat=17'?>">FarmHouse Sink</a>

                    <ul>
                      <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks/single-bowl?cat=19'?>">Single Bowl</a></li>
                      <li><a href="<?php echo get_site_url().'/index.php/farm-house-sinks/double-bowls?cat=18'?>">Double Bowl</a></li>
                    </ul>
                  </li>

                  <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks?cat=20'?>">Under Mount Sink</a>
                    <ul>
                      <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks/single-bowls?cat=21'?>">Single Bowl</a></li>
                      <li><a href="<?php echo get_site_url().'/index.php/under-mount-sinks/double-bowls?cat=22'?>">Double Bowl</a></li>
                    </ul>
                  </li>

                  <li><a href="<?php echo get_site_url().'/index.php/basin-sinks?cat=23'?>">Basin Sinks</a></li>
                  <li><a href="<?php echo get_site_url().'/index.php/pedestal-sinks?cat=24'?>">Pedistal Sinks</a></li>

                </ul>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="social-pages footer__divider">
                <div class="section-heading">
                  <h5>Social Pages</h5>
                </div>
                <ul class="text-justify footer__align--three">
                  <li><a href="#">FB</a></li>
                  <li><a href="#">GP</a></li>
                  <li><a href="#">TW</a></li>
                  <li><a href="#">PT</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
  </div>

</footer>
<?php
  wp_footer();
  if(is_admin_bar_showing()){
    echo "
    <script>
    document.querySelector('.main-header').style.top = '30px'
    </script>
    ";
  }
?>
</body>
</html>
