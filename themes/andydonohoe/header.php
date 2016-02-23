<?php
  /**
   * Contains head references.
   *
   * @package nebula
   */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<body>

<?php get_template_part('template-parts/brand', 'menu'); ?>
<?php get_template_part('template-parts/menu', 'pop'); ?>
