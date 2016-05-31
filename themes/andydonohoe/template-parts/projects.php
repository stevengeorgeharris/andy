<div class="projects">
<div class="projects__measure"></div>

<?php

  $args = array(
    'post_type' => 'projects',
    'orderby' => 'rand',
    'posts_per_page' => -1
  );
  $query = new WP_Query($args);

  while ( $query -> have_posts() ) : $query -> the_post();
  $link = get_permalink();
  $id = get_the_ID();
  $title = get_the_title();
  $image = get_the_post_thumbnail();
    echo '<div class="projects__card">';
    echo '<a data-title="'. $title .'" data-id="'. $id .'" href="' . $link . '">' . $image . '</a>';
    echo '<a data-title="'. $title .'" data-id="'. $id .'" href="' . $link . '">' . $title . '</a>';
    echo '</div>';
  endwhile;

?>

</div>
