<blockquote>
<small class="byline author vcard"><?php echo __('', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></small>
<time class="published text-muted" datetime="<?php echo get_the_time('c'); ?>">Published <?php echo get_the_date(); ?></time>
</blockquote>