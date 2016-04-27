<div class="projects">
<div class="projects__measure"></div>

<?php
  // TODO:: Split into 3 columns > Click opens slideshow.

  $args = array(
    'post_type' => 'projects',
  );
  $query = new WP_Query($args);

  while ( $query -> have_posts() ) : $query -> the_post();
    echo '<div class="projects__card">';
    $link = get_permalink();
    $title = get_the_title();
    $image = get_the_post_thumbnail();
    echo $image;
    echo '<a href="' . $link . '">' . $title . '</a>';
    echo '</div>';
  endwhile;

?>

</div>
