<?php
  get_header();
  while(have_posts()){
    the_post()
    ?>
    <h1><?php the_title() ?></h1>
    <?php the_content()?>
    <img src="<?php the_post_thumbnail_url('ThumbnailSize');?>" alt="">
    <?php
  }
  get_footer();
?>