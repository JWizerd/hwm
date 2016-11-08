<?php
$events = array(
	'posts_per_page'	=> -1,
	'post_type'			  => 'events',
  'order'           => 'ASC',
);

$event_query = new WP_Query( $events );

// The Loop
if ( $event_query->have_posts() ) {
  echo '<ul class="row">';
  while ( $event_query->have_posts() ) {
    $event_query->the_post();
    echo '<li class="col-sm-4 col-md-3 footer-events">' .
         '<a href="'. get_permalink() .'"><h3 class="event-title footer-event-title">' . get_the_title() . '</h3></a>';
    echo '<p>Date: ' . get_field('event_date') .'</p>';
         '</li>';
  }
  echo '</ul>';
} else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
