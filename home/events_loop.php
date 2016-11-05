<?php

$events = array(
	'posts_per_page'	=> -1,
	'post_type'			  => 'events',
  'order'           => 'ASC',
);

$event_query = new WP_Query( $events );

// The Loop
if ( $event_query->have_posts() ) {
  echo '<ul class="events">';
  while ( $event_query->have_posts() ) {
    $event_query->the_post();
    echo '<li class="col-md-3 col-sm-6 event">' .
         '<h3 class="event-title">' . get_the_title() . '</h3>' .
         '<p>Date: ' . get_field('event_date') .'</p>' .
         '<small class="event-description">' . get_field('event_description') .'</small>' .
         '</li>';
  }
  echo '</ul>';
} else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
