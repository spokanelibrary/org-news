<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="pull-left" style="padding-right: 20px;">
  <div class="alert alert-success">
    <p class="lead">
      In the current edition:
    </p>
    <?php echo do_shortcode('[spl_mailgun_current]'); ?>
    <p>
      Also in this edition&hellip;
    </p>
  </div>
</div>
<?php get_template_part('templates/content', 'page'); ?>

