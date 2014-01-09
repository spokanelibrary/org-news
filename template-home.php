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
  Published monthly, with occasional special editions
  <small></small>
</h3>

<p>
  Read it here, or have the news delivered to your inbox.
</p>

<div class="row">
  <div class="col-md-4">
    <p>
      We will <a title="Your Privacy, Our Promise" href="http://news.spokanelibrary.org/privacy/">never share your email address</a> with a third party.
    </p>
  </div>
  <div class="col-md-8">
    <p class="lead"><a href="/subscribe/">Sign me up for Library News →</a></p>
  </div>
</div>

<div clas="row">
  <div class="col-md-4">
    <div class="alert alert-success">

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




