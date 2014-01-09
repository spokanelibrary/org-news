<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<h3 style="margin-top:0;">
  Library News 
  <small>published monthly, with occasional special editions</small>
</h3>

<p class="lead text-center"><a href="/subscribe/">Sign me up for Library news →</a></p>

<div clas="row">
  <div class="col-md-4">
    <div class="alert alert-success" style="margin-top:10px;">

      <p class="lead">
        In the current edition:
      </p>

      <?php echo do_shortcode('[spl_mailgun_current format=toc]'); ?>
      <hr>
      <?php echo do_shortcode('[spl_mailgun_current title="Read the latest newsletter &rarr;" class="btn btn-block btn-success"]'); ?>
    </div>
  </div>
  <div class="col-md-8">
    <?php get_template_part('templates/content', 'page'); ?>
  </div>
</div>

<div class="pull-left" style="padding: 20px 20px 0 0;">
  
  <!--
  <p>
    <a href="/subscribe/">Sign me up for Library news &rarr;</a>
  </p>
  -->
</div>


