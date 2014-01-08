<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="pull-right">
  <div class="alert alert-success">
    <?php echo do_shortcode('[spl_mailgun_current]'); ?>
  </div>
</div>
<?php get_template_part('templates/content', 'page'); ?>

