<footer class="footer">

    <div class="footer__nav">
      <div class="row">
        <div class="col-md-6">
          <div class="row">

            <div class="col-lg-6">
              <div class="footer__nav__copyright footer__divider">
                <div class="brand__text text-center">
                  <img onclick="location.href='<?php echo get_site_url()?>'" src=<?php echo get_template_directory_uri()."/assets/logo.png"?> width="65" height="65" class="d-inline-block" alt="Rams International Logo">
                  <h6>&copy;All Rights Reserved</h6>
                  <h6>Rams International</h6>
                </div>
              </div>
            </div>

            <div class="col-lg-6 ">
              <div class="rams-pages footer__divider">
                <div class="section-heading">
                  <h5>Rams Pages</h5>
                </div>
                <ul class="text-justify footer__align--one">
                  <li><a class="active" href=<?php echo get_site_url()?>>Home</a></li>
                  <li><a href=<?php echo get_site_url().'/about-us'?>>About</a></li>
                  <li><a href=<?php echo get_site_url().'/contact-us'?>>Contact</a></li>
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

                  <li><a href=<?php echo get_site_url().'/products/furniture?category_name=furniture'?>>Furniture</a></li>
                  <li><a href=<?php echo get_site_url().'/products/lighting?category_name=lighting'?>>Lighting</a></li>
                  <li><a href=<?php echo get_site_url().'/products/home-decor?category_name=home-decor'?>>Home Decor</a></li>
                  <li><a href=<?php echo get_site_url().'/products/kitchen-dining?category_name=kitchen-dining'?>>Kitchen &amp; Dining</a></li>
                  <li><a href=<?php echo get_site_url().'/products/mirrors?category_name=mirrors'?>>Mirrors</a></li>
                  <li><a href=<?php echo get_site_url().'/products/outdoor?category_name=outdoor'?>>Outdoor</a></li>

                </ul>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="social-pages footer__divider">
                <div class="section-heading">
                  <h5>Social Pages</h5>
                </div> 
                <ul class="text-justify footer__align--three">
                  <li><a href="https://www.facebook.com/ramsinternational" class="social-icons align-middle"><span class="fb">&nbsp;</span>Facebook</a></li>
                  <li><a href="https://www.linkedin.com/company/rams-international-india/about/" class="social-icons align-middle"><span class="li">&nbsp;</span>Linkedin</a></li>
                  <li><a href="https://twitter.com/anwer_riyaz" class="social-icons align-middle"><span class="tw">&nbsp;</span>Twitter</a></li>
                  <li><a href="#" class="social-icons align-middle"><span class="pt">&nbsp;</span>Pinterest</a></li>
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
?>
<script>
var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
});
</script>
</body>
</html>