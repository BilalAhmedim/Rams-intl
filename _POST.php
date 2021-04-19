<?php
$cat = esc_html(get_the_category()[0]->name) .' '.get_the_title();
?>
<figure class="post">
  <a href=<?php echo the_permalink();?> >
    <img src=<?php the_post_thumbnail_url('small-size')?> alt='<?php echo $cat;?>' class="img-responsive">
    <figcaption class="caption">
      <div class="post__caption">
        <h5><?php the_title();?></h5>
      </div>
    </figcaption>
  </a>
</figure>
