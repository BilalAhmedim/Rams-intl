<?php
  get_header();
  $args = array(
    'post_type' => 'post' ,
    'orderby' => 'date' ,
    'order' => 'DESC' ,
    'posts_per_page' => 6,
    'cat'=> $_GET['cat'],
    'paged' => get_query_var('paged'),
    'post_parent' => $parent
  ); 
  $query = new WP_Query($args);?>
  <div class="<?php the_title();?>">
    <div class=<?php echo the_title().'__wrapper';?>>
      <div class="section-header">
        <h1><?php the_title();?></h1>
      </div>
    </div>
  </div>

  <div class="gallery-section">
    <div class="container">
    <?php
    while($query->have_posts()){
      $query->the_post();
    ?>
      <div class="meta-box">
        <a href="<?php echo the_permalink();?>">
          <img data-src="<?php the_post_thumbnail_url('custom-size')?>" class="lazy img-responsive">
          <div class="caption">
            <h6><?php the_title();?></h6>
          </div>
        </a>
      </div>
  <?php
  }
  wp_reset_query();
  ?>
  </div>
  <?php
  get_footer();
  ?>
<script>
  var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
  });
</script>