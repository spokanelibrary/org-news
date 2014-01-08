<div class="page-header">
  <h1>
    Newsletter Archives
  </h1>
</div>

This is some intro material

<hr>

<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-summary">
    <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time> | <?php the_excerpt(); ?>
  </div>
</article>
<?php endwhile; ?>