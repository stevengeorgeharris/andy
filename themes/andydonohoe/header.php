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
<!--
  /$$      /$$                 /$$                 /$$$$$$$                   /$$$$$$   /$$
| $$$    /$$$                | $$                | $$__  $$                 /$$__  $$ | $$
| $$$$  /$$$$  /$$$$$$   /$$$$$$$  /$$$$$$       | $$  \ $$ /$$   /$$      | $$  \__//$$$$$$    /$$$$$$  /$$    /$$ /$$$$$$  /$$$$$$$
| $$ $$/$$ $$ |____  $$ /$$__  $$ /$$__  $$      | $$$$$$$ | $$  | $$      |  $$$$$$|_  $$_/   /$$__  $$|  $$  /$$//$$__  $$| $$__  $$
| $$  $$$| $$  /$$$$$$$| $$  | $$| $$$$$$$$      | $$__  $$| $$  | $$       \____  $$ | $$    | $$$$$$$$ \  $$/$$/| $$$$$$$$| $$  \ $$
| $$\  $ | $$ /$$__  $$| $$  | $$| $$_____/      | $$  \ $$| $$  | $$       /$$  \ $$ | $$ /$$| $$_____/  \  $$$/ | $$_____/| $$  | $$
| $$ \/  | $$|  $$$$$$$|  $$$$$$$|  $$$$$$$      | $$$$$$$/|  $$$$$$$      |  $$$$$$/ |  $$$$/|  $$$$$$$   \  $/  |  $$$$$$$| $$  | $$
|__/     |__/ \_______/ \_______/ \_______/      |_______/  \____  $$       \______/   \___/   \_______/    \_/    \_______/|__/  |__/
                                                           /$$  | $$
                                                          |  $$$$$$/
                                                           \______/

                                                           madebysteven.com
-->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

<?php wp_head(); ?>

<body>
  <?php
    $maintenance = get_field('maintenance_mode', 'option');
    $logged_in = is_user_logged_in();
    if ($maintenance && ! $logged_in) :
      get_template_part('template-parts/maintenance');
    endif;
  ?>

<?php get_template_part('template-parts/brand', 'menu'); ?>
<?php get_template_part('template-parts/menu', 'pop'); ?>
