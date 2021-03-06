<?php
/**
 * Template Name: Landing
 *
 * @package andydonohoe
 */

  get_header();
?>

<!-- Above fold on page entry -->
<?php get_template_part('template-parts/welcome'); ?>

<div class="project"></div>

<!-- Below fold -->
<div class="portfolio">
  <?php get_template_part('template-parts/projects'); ?>
</div>

<?php
  get_footer();
?>
