<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="pull-left" style="padding: 0 20px 20px 0;">
  <div class="alert alert-success">

    <p class="lead">
      In the current edition:
    </p>

    <?php echo do_shortcode('[spl_mailgun_current format=toc]'); ?>

  </div>
</div>
<?php get_template_part('templates/content', 'page'); ?>

