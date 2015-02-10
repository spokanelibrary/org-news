<div class="page-header">
  <h1>
    Library News 
    <small>Past Issues</small>
  </h1>
</div>

<p>
  Issues of Library News published prior to 2014 are <a title="Archived Issues" href="/archive">available in our archive</a>.
</p>

<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
  <header>
    <?php
    /*
    <h2 class="entry-title">
    	<a href="<?php the_permalink(); ?>">
    		<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('F, Y'); ?></time>
    	</a>
    	<small>
    		<?php the_title(); ?>
    	</small>
    </h2>
    */
    ?>

    <h2 class="entry-title">
      <small>
        <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('F, Y'); ?></time>
      </small>
      <br>
      <a class="text-success" href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>

  </header>
  <div class="entry-summary">
  	<blockquote>
  	  <?php the_excerpt(); ?>
	  </blockquote>
  </div>
</article>

<footer>
  <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
</footer>

<?php endwhile; ?>

<ul class="nav nav-pills nav-stacked">
          <?php wp_get_archives(array('type'=>'postbypost','before'=>'<h3 class="">','after'=>' <small>&rarr;</small></h3>')); ?>
        </ul>