<?php
$event_title = get_field('event_title');
$event_date = get_field('event_date');
$event_description = get_field('event_description');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>

</head>
<body>
<main class="fluid-container events-wrapper">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1 events-single">
      <h2><a href="<?php echo home_url(); ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Go Back</a></h2>
      <hr>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h2><?php echo $event_title; ?></h2>
          <h3><?php echo $event_date; ?></h3>
            <?php
              if (empty(get_field('long_event_description'))) :
                 echo '<p>' . $event_description . '</p>';
              else :
                the_field('long_event_description');
              endif;
            ?>
      <?php endwhile; endif; ?>
      <h3 class="footer-events-title">Other Upcoming Events</h3>
      <?php get_template_part('single/events_footer_loop'); ?>
    </div>
  </div>
</main>
<footer><?php wp_footer(); ?></footer>
</body>
</html>
