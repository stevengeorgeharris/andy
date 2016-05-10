<?php
/**
* @package andydonohoe
*/

get_header();
?>


<div class="project-slider-container">

<?php
$images = get_field('images');
$text = get_field('project_description');

  if( $images ): ?>
  <div class="project-slider__button project-slider__prev"></div>
  <div class="project-slider__button project-slider__next"></div>
  <div class="project-slider">
    <?php if ($text) : ?>
      <div class="project-slider__slide-text">
        <?php echo $text; ?>
      </div>
    <?php endif; ?>

    <?php foreach( $images as $image ): ?>
      <div class="project-slider__slide">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
    <?php endforeach; ?>

  </div>
  <?php endif; ?>
</div>
<div class="project-slider__info">
  <h2 class="project-slider__title">
    <?php the_title(); ?>
  </h2>
  <div class="project-slider__count">
    <span class="project-slider__current"></span> / <span class="project-slider__total"></span>
  </div>
</div>

<?php
get_footer();
?>
