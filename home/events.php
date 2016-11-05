<?php
$upcoming_events_title = get_field('upcoming_events_title');
$upcoming_events_description = get_field('upcoming_events_description');
?>

<section id="events">
  <article class="container">
    <div class="row">
      <h2 class="events-section-title"><?php echo $upcoming_events_title; ?></h2>
      <p class="events-section-desc"><?php echo $upcoming_events_description; ?></p>
      <?php get_template_part('home/events_loop'); ?>
    </div>
  </article>
</section>
