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
    echo '<li class="col-sm-6 event">' .
         '<h3 class="event-title">' . get_the_title() . '</h3>' .
         '<p>Date: ' . get_field('event_date') .'</p>' .
         '<small class="event-description">' . substr(get_field('event_description'), 0, 200) .'</small>';

		echo '<a href="'. get_permalink() .'" class="btn btn-primary btn-events">View Details</a>' .
         '</li>';
  }
  echo '</ul>';
} else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
