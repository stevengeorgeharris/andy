<div class="projects">
<div class="projects__measure"></div>

<?php

  $args = array(
    'post_type' => 'projects',
    'orderby' => 'rand'
  );
  $query = new WP_Query($args);

  while ( $query -> have_posts() ) : $query -> the_post();
  $link = get_permalink();
  $title = get_the_title();
  $image = get_the_post_thumbnail();
    echo '<div class="projects__card">';
    echo '<a href="' . $link . '">' . $image . '</a>';
    echo '<a href="' . $link . '">' . $title . '</a>';
    echo '</div>';
  endwhile;

?>

</div>
