<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="pull-left" style="padding: 20px 20px 0 0;">
  <div class="alert alert-success">

    <p class="lead">
      In the current edition:
    </p>

    <?php echo do_shortcode('[spl_mailgun_current format=toc]'); ?>
    <hr>
    <?php echo do_shortcode('[spl_mailgun_current title="Read all about it &rarr;" class="btn btn-block btn-success"]'); ?>
  </div>

  <p>
    <a href="/subscribe/">Sign me up for Library news</a>
  </p>
</div>
<?php get_template_part('templates/content', 'page'); ?>

