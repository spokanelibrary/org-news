<div class="alert alert-warning" style="border-left-width:4px;">

  <p class="lead">
    <small class="glyphicon glyphicon-bullhorn"></small>
    In the current edition
  </p>

  <?php echo do_shortcode('[spl_mailgun_current format=toc]'); ?>
  <hr>
  <?php echo do_shortcode('[spl_mailgun_current title="Read the current newsletter &rarr;" class="btn btn-block btn-warning"]'); ?>

</div>

<?php dynamic_sidebar('sidebar-primary'); ?>