<?php
// Theme-Stylesheet einbinden
function game_theme_enqueue_styles() {
    wp_enqueue_style('game-theme-style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'game_theme_enqueue_styles');

    // Navigationsmenü registrieren
function mp_register_menus(): void {
  register_nav_menus(
    array(
      'main-menu' => __('Hauptmenü', 'game-theme'),
      'secondary-menu' => __('Sekundärmenü', 'game-theme'),
      'footer-menu' => __('Footer Menü', 'game-theme'),
      'mobile-menu' => __('Mobilemenü', 'game-theme'),
    )
  );
}
add_action('after_setup_theme', 'mp_register_menus');

