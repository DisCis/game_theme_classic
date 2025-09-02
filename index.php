<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Theme Classic</title>
  <?php wp_head(); ?>
</head>

<body>
<?php get_header(); ?>

  <main>
  <div class="card-container">
  <?php
  // WordPress Loop: Beiträge abrufen
  $args = array(
    'post_type' => 'post', // Beitragstyp (z. B. "post" oder "page")
    'posts_per_page' => 2, // Anzahl der Karten
  );
  $query = new WP_Query($args);

  // Schleife durch die Beiträge
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
      <div class="card">
        <h2 class="card-title"><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
          <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="card-image">
        <?php else : ?>
          <img src="https://via.placeholder.com/300x200" alt="Platzhalterbild" class="card-image">
        <?php endif; ?>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="card-button">Mehr erfahren</a>
      </div>
    <?php endwhile;
    wp_reset_postdata();
  else : ?>
    <p>Keine Beiträge gefunden.</p>
  <?php endif; ?>
</div>

  <?php the_content(); ?>
  </main>

  <?php get_footer(); ?>