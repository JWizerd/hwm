<?php wp_footer(); ?>
<?php
$contact_us_title = get_field('contact_us_title');
$contact_us_call_to_action = get_field('contact_us_call_to_action');
$contact_form_email_address = get_field('contact_form_email_address');
$donate_title = get_field('donate_title');
$donate_description = get_field('donate_description');
$donate_button_text = get_field('donate_button_text');
$donate_link = get_field('donate_link');
?>
<footer class="container-fluid">
<div class="row">
  <div class="col-sm-6" id="contact">
    <h3><?php echo $contact_us_title; ?><strong><?php echo $contact_us_call_to_action; ?></strong></h3>
    <form action="https://formspree.io/<?php echo $contact_form_email_address; ?>" method="post">
      <label for="name" class="sr-only"></label>
        <input type="text" id="name" placeholder="Name (Last Name is Optional)">
      <label for="email" class="sr-only"></label>
        <input name="_replyto" type="email" id="email" placeholder="Email Address">
      <label for="message" class="sr-only"></label>
        <textarea name="message" type="message" id="message" rows="5"></textarea>
      <input type="submit" value="Send Message">
    </form>
  </div>
  <section>
    <div class="col-sm-6" id="donate">
      <h2><?php echo $donate_title; ?></h2>
      <p><?php echo $donate_description; ?></p>
      <a target="_blank" href="<?php echo $donate_link; ?>" class="btn-donate" role="button"><?php echo $donate_button_text; ?></a>
    </div>
  </section>
</div>
<div class="row footer-links">
  <small class="copy">&copy;Copyright <?php echo date('Y'); ?> Healing Way Ministry</small>
</div>
<a href="#" class="back-to-top" style="display: inline;">
<i class="fa fa-arrow-circle-up shadow-text"></i>
</a>
</footer>
</body>
</html>
