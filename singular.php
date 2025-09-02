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
  <?php the_content(); ?>
  </main>

  <?php get_footer(); ?>