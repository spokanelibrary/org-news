
<p class="byline author vcard text-muted"><?php echo __('&mdash', 'roots'); ?> 
	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a>
	<time class="published pull-right" datetime="<?php echo get_the_time('c'); ?>">Published <?php echo get_the_date(); ?></time>
</p>

