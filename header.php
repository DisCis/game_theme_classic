<header> 
  <h1><?php the_title(); ?></h1>
  </header>
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => 'false',
      ));
      ?>
    </nav>