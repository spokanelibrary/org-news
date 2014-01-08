<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="pull-left" style="padding: 0 20px 0 0;">
  <div class="alert alert-success">

    <p class="lead">
      In the current edition:
    </p>

    <?php echo do_shortcode('[spl_mailgun_current format=toc]'); ?>
    <hr>
    <?php echo do_shortcode('[spl_mailgun_current title="Read all about it &rarr;" class="btn btn-block btn-primary"]'); ?>
  </div>
</div>
<?php get_template_part('templates/content', 'page'); ?>

