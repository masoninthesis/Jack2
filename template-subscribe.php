<?php
/*
Template Name: Subscribe Page
*/
?>

<!-- <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?> -->
<h1>Download Resources:</h1>
<img class="img-header img-responsive img-rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/SpotsBG.jpg" alt="" />
<p class="greeting">
  Thanks for reading <a href="https://medium.com/@masoninthesis/steal-my-app-i-dare-you-472fd044068f">Steal My Idea, I Dare You</a> on Medium. Enter your email below, and <strong class="strong-color">I'll shoot you .zip file with all my resources</strong> in it.
</p>


<div class="included">
  <h4>Included:</h4>
  <ul class="included-items">
    <li>App Demo</li>
    <li>Sketch App Project File</li>
    <li>Sketch Icon File</li>
    <li>Early Prototype</li>
    <li>Concept Sketch</li>
    <li>Access to all my design/code live streams</li>
  </ul>
</div>

<!-- Mailchimp --><form action="//masonlawlor.us8.list-manage.com/subscribe/post?u=284e326d5adb7f537c7cc1bde&amp;id=76949ee51e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
</li>
<li class="opt-btn">
<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-default btn-primary" type="submit" value="Submit" tabindex="501">Subscribe</button>
</li>
</ul>
</form> <!-- /Mailchimp -->



<style>
.img-header {
  padding-top: 20px;
}

.strong-color {
  color: #893a3f;
}

.greeting {
  font-size: 18px;
  width: 80%;
  margin: 30px auto 6px;
}

.included {
  font-size: 18px;
  width: 80%;
  margin: 30px auto 6px;
}

.included-items {
  line-height: 36px;

}

form {
  padding-top: 25px;
}

.form-control {
  width: 80% !important;
  text-align: center;
  margin: 0 auto;
  display: block !important;
  height: 60px;
  font-size: x-large;
  font-weight: 200;
}

.opt-btn {
  list-style-type: none;
  padding-top: 20px;
}

.submit {
  margin: 0 auto;
  display: block;
  width: 80%;
  height: 60px;
  font-size: x-large;
}
</style>
