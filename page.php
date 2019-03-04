<?php
  get_header();
  ?>
  <div class="header_back">
    <div class="section-header">
      <h1><?php the_title();?></h1>
    </div>
  </div>
  <?php
  if( is_page(119) ){ // About Page
    while(have_posts()){
      the_post();?>
      <div class="generic_content wrapper">
      <?php the_content();?>
      </div>
    <?php
    }
  }else if( is_page(125) ){ //Contact Page
    while(have_posts()){
      the_post();
      the_content();
    }
  }else{  // all Pages
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
    </div>
    <?php
    }
  get_footer();
  ?>