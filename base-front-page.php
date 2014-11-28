<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    get_template_part('templates/header');
  ?>

  <div class="container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <section id="hero">
    <div class="container">
      <h1>Every great site consists of 3 things:</h1>
      <h2>1. Pixel Perfect Design</h2>
      <center><svg width="564" height="17"><?php get_template_part( 'assets/img/svg/inline', 'ruler.svg' ); ?></center>
      <div id='video-wrapper' class="vid-laptop">
        <video autoplay class='video-js' id='craft-everything-video'>
          <source src='http://masonlawlor.com/jackalopemediadotcom/wp-content/themes/Jack2/assets/video/Jack2.1.mp4' type='video/mp4'>
          <source src='https://s3-us-west-1.amazonaws.com/assets-media-dtelepathy/video/philosophy/placeholder.webm' type='video/webm'>
          <source src='https://s3-us-west-1.amazonaws.com/assets-media-dtelepathy/video/philosophy/placeholder.ogv' type='video/ogg'>
        </video>
      </div>
      <div class="vid-mobile">
        <a href="//fast.wistia.net/embed/iframe/va8o82dilx?popover=true" class="wistia-popover[height=360,playerColor=ffffff,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/b1d475a810d5c1b174c980e1e3ee033985c16c7a.jpg?image_play_button=true&image_play_button_color=ffffffe0&image_crop_resized=150x84" alt="" /></a>
      </div>
    </div>
  </section>

  <section id="section1">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h2>2. A Rock Solid Framework</h2>
          <p>
            We've created custom frameworks so we can keep our websites technology on the cutting edge and speedy as hell. We can use them to build just about anything. If you want to pop the hood and take a look...
          </p>
          <div class="quote quote-laptop">
            <div class="quote-icon"><h6>Read the <a href="http://jackalopemedia.com/the-high-tech-manifesto/" target="_blank">High Tech Manifesto</a> on our blog.</h6></div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <center><svg width="487" height="285" class="logo logo-modal"><?php get_template_part( 'assets/img/svg/inline', 'car.svg' ); ?></center>
        </div>
      </div>
      <div class="quote quote-mobile">
        <div class="quote-icon"><h6>Read the <a href="http://jackalopemedia.com/the-high-tech-manifesto/" target="_blank">High Tech Manifesto</a> on our blog.</h6></div>
      </div>
    </div>
  </section>

  <section id="section2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2>3. Videos and Animations</h2>
          <p>
            Most people are visual learners. Show them exactly how something works, and it will connect a lot more dots than a wall of text. Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
          <div class="quote quote-laptop" data-toggle="modal" data-target="#myModal">
            <div class="quote-icon"><h6>Read more about <a href="#">The Future of Advertising</a>.</h6></div>
          </div>
        </div>
        <div class="col-sm-6">
          <a href="//fast.wistia.net/embed/iframe/5we0mp1icc?popover=true" class="wistia-popover[height=360,playerColor=313131,width=640]">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/video.png" alt="" />
          </a>
          <div class="quote quote-mobile" data-toggle="modal" data-target="#myModal">
            <div class="quote-icon"><h6>Read more about <a href="#">The Future of Advertising</a>.</h6></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="section3">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2>But don't forget tactics!</h2>
          <p>
            A great site without a great product is worthless. 90% of business don’t fail if they validate their market first. Make sure you’re providing sufficient value or else a great site isn’t going to do you any good.
          </p>
          <div class="quote quote-laptop" data-toggle="modal" data-target="#myModal">
              <div class="quote-icon"><h6>Read more about <a href="#">The Future of Advertising</a>.</h6></div>
          </div>
        </div>
        <div class="col-sm-6">
          <img class="img-responsive graph" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/graph.png" alt="growth" />
          <div class="quote quote-mobile" data-toggle="modal" data-target="#myModal">
              <div class="quote-icon"><h6>Read more about <a href="#">The Future of Advertising</a>.</h6></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="home-cta">
    <div class="container">
      <h3>Request quote:</h3>
      <div id="cta" class="row">
        <div class="col-sm-3 col-xs-12">
          <!--<img class="form" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/form.png" alt="form-placeholder" />-->
          <div class="optin-form"><?php dynamic_sidebar('sidebar-footer'); ?></div>
        </div>
        <div class="col-sm-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-0 col-md-8 col-sm-9 col-xs-6 col-xs-offset-3">
          <ul class="list-inline">
            <li>
              <div class="rectangle" data-toggle="modal" data-target="#myModal">
                <svg width="45" height="57" class="labz"><?php get_template_part( 'assets/img/svg/inline', 'labs.svg' ); ?></svg>
                <h4>Case Studies</h4>
              </div>
            </li>
            <li>
              <div class="rectangle" data-toggle="modal" data-target="#myModal">
                <svg width="53" height="57" class="blogz"><?php get_template_part( 'assets/img/svg/inline', 'blog.svg' ); ?></svg>
                <h4 class="blog">Blog</h4>
              </div>
            </li>
            <li>
              <div class="rectangle labs" data-toggle="modal" data-target="#myModal">
                <svg width="57" height="80" class="jobz"><?php get_template_part( 'assets/img/svg/inline', 'jobs.svg' ); ?></svg>
                <h4 class="blog">Jobs</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('templates/footer'); ?>
  <?php wp_footer(); ?>

</body>
<!-- Wistia Lightbox --><script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
</html>
