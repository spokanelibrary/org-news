<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="row">

  <div class="col-sm-6">
    <?php get_template_part('templates/content', 'page'); ?>
  </div><!-- /.col -->
  
  <div class="col-sm-6">

    <div class="alert alert-success">
      <?php do_shortcode('spl_mailgun_current'); ?>
    </div>
    
  </div><!-- /.col -->

</div><!-- /.row -->
