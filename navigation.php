<?php
$facebook_link = get_field('facebook_link');
$navigation_link_title_1 = get_field('navigation_link_title_1');

$navigation_link_title_2 = get_field('navigation_link_title_2');

$navigation_link_title_3 = get_field('navigation_link_title_3');

$navigation_link_title_4 = get_field('navigation_link_title_4');

$navigation_link_title_5 = get_field('navigation_link_title_5');
$navigation_link_5 = get_field('navigation_link_5');

?>
<nav>
  <ul>
    <li>
      <a href="#about" class="shadow-text"><?php echo $navigation_link_title_1; ?></a>
    </li>
    <li>
      <a href="#events" class="shadow-text"><?php echo $navigation_link_title_2; ?></a>
    </li>
    <li>
      <a href="#sermons" class="shadow-text"><?php echo $navigation_link_title_3; ?></a>
    </li>
    <li>
      <a href="#contact" class="shadow-text"><?php echo $navigation_link_title_4; ?></a>
    </li>
    <?php if (!empty($navigation_link_5)) : ?>
      <li>
        <a target="_blank" href="<?php echo $navigation_link_5; ?>" class="shadow-text"><?php echo $navigation_link_title_5; ?></a>
      </li>
    <?php endif; ?>
    <li>
      <a target="_blank" href="<?php echo $facebook_link; ?>" class="shadow-text"><i class="fa fa-facebook-square"></i> Facebook</a>
    </li>
  </ul>
</nav>
