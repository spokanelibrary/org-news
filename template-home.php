<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="pull-left">
  <div class="alert alert-success">
    <p class="lead">
      Current Edition
    </p>
    <?php echo do_shortcode('[spl_mailgun_current]'); ?>
  </div>
</div>
<?php get_template_part('templates/content', 'page'); ?>

