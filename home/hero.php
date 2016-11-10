<?php
  // advanced custom fields
  $verse = get_field('verse');
  $bible_verse_location = get_field('bible_verse_location');
  $logo = get_field("logo");
?>

<section class="container" id="hero">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="site-title">
        <?php if(!empty($logo)) : ?>
          <img class="logo" src="<?php echo $logo["url"] ?>" alt="<?php echo $logo["alt"] ?>">
        <?php endif ?>
        Healing Way Ministry
      </h1>
      <p class="scripture">
        "<?php echo $verse; ?>"
        <strong>~ <?php echo $bible_verse_location; ?></strong>
      <p>
    </div>
  </div>
</section>
