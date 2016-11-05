<?php $facebook_link = get_field('facebook_link'); ?>
<nav>
  <ul>
    <li>
      <a href="#about" class="shadow-text">About</a>
    </li>
    <li>
      <a href="#events" class="shadow-text">Events</a>
    </li>
    <li>
      <a href="#sermons" class="shadow-text">Sermons</a>
    </li>
    <li>
      <a href="#contact" class="shadow-text">Contact | Donate</a>
    </li>
    <li>
      <a target="_blank" href="<?php echo $facebook_link; ?>" class="shadow-text"><i class="fa fa-facebook-square"></i> Facebook</a>
    </li>
  </ul>
</nav>
