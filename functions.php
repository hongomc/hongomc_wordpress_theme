<?php
function hongomc_register_styles() {
  wp_enqueue_style('normalize_css', 'https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css');
  wp_enqueue_style('hongomc_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'hongomc_register_styles');
?>
