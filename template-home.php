<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<!--
<div class="page-header">
    <h1>
      News &amp; new ideas
      <small>from your local Library</small>
    </h1>
    <?php// get_template_part('templates/entry-meta'); ?>
  </div>
-->
<h3 class="text-success" style="margin-top:0;">
  <strong>Library News:</strong> published monthly, with occasional special editions
  <small></small>
</h3>

<div class="row">
  <div class="col-md-4">
    
  </div>
  <div class="col-md-8">
    
  </div>
</div>

<div clas="row">
  <div class="col-md-4">
    <div class="alert alert-warning" style="border-left-width:4px; margin-top:25px;">

      <p class="lead">
        <small class="glyphicon glyphicon-bullhorn"></small>
        In the current edition
      </p>

      <?php echo do_shortcode('[spl_mailgun_current format=toc link_posts=true]'); ?>
      <hr>
      <?php echo do_shortcode('[spl_mailgun_current title="Read the current newsletter &rarr;" class="btn btn-block btn-warning"]'); ?>
    </div>
  </div>
  <div class="col-md-8">
    <strong class="text-muted">
    Read it here or have the news delivered to your inbox.
    </strong>
    <p>
      <a class="btn btn-block btn-primary" href="/subscribe/">
        <small class="glyphicon glyphicon-envelope"></small>
        Sign me up for Library News →
      </a>
    </p>
    <?php get_template_part('templates/content', 'page'); ?>
  </div>
</div>




