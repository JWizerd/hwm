<?php
  $sermons_title = get_field('sermons_title');
  $sermons_call_to_action = get_field('sermons_call_to_action');
  $sermons_listen_directions = get_field('sermons_listen_directions');
?>

<section id="sermons">
  <div class="container">
    <div class="row">
      <h2><?php echo $sermons_title; ?></h2>
      <h3><?php echo $sermons_call_to_action; ?></h3>
      <div class="col-md-10 col-md-offset-1">
        <p>
          <?php echo $sermons_listen_directions; ?>
        </p>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
