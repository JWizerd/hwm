<?php
  // advanced custom fields
  $about_title = get_field('about_title');
  $about_description = get_field('about_description');
  $church_address = get_field('church_address');
  $service_times_title = get_field('service_times_title');
  $service_times = get_field('service_times');
?>

<section id="about">
  <div class="container">
    <div class="row">
      <article class="col-xs-12">
        <h2><?php echo $about_title; ?></h2>
        <p><?php echo $about_description; ?></p>
        <div class="row">
          <div class="general-info col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4">
            <strong class="address"><?php echo $church_address; ?></strong>
            <strong class="services"><?php echo $service_times_title; ?></strong>
            <strong><?php echo $service_times; ?></strong>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>
