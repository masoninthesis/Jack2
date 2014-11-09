<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap container" role="document">
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
    <div class="wrap container">
      <h1>Every Great Site Consists of 3 Things</h1>
      <h2>1. Pixel Perfect Design</h2>
      <div id='video-wrapper'>
        <video autoplay class='video-js' id='craft-everything-video'>
          <source src='http://masonlawlor.com/assets/Jack2.1.mp4' type='video/mp4'>
          <source src='https://s3-us-west-1.amazonaws.com/assets-media-dtelepathy/video/philosophy/DTBetaBrew.webm' type='video/webm'>
          <source src='https://s3-us-west-1.amazonaws.com/assets-media-dtelepathy/video/philosophy/DTBetaBrew.ogv' type='video/ogg'>
        </video>
      </div>
    </div>
  </section>

  <section id="row1">
    <div class="wrap container">
      <div class="row">
        <div class="col-sm-6">
          <h2>2. A Rock Solid Framework</h2>
          <p>
            If you're looking for a solid foundation, it’s all about the technology. Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <div class="quote">
            <ul class="list-inline">
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/biopic.png" class="img-circle" alt="bio pic" /></li>
              <li><p>Click <a>here</a> to continue</p></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 themes">
          <div class="col-sm-6">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/g-strap.png" alt="g-strap" />
          </div>
          <div class="col-sm-6">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/nudist.png" alt="nudist" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="row2">
    <div class="wrap container">
      <div class="row">
        <div class="col-sm-6">
          <h2>3. Videos and Animations</h2>
          <p>
            Most people are visual learners. Show them exactly how something works, and it will connect a lot more dots than a wall of text. Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          </p>
          <div class="quote">
              <ul class="list-inline">
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/biopic.png" class="img-circle" alt="bio pic" /></li>
                <li><p>Click <a>here</a> to continue</p></li>
              </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <a href="//fast.wistia.net/embed/iframe/5we0mp1icc?popover=true" class="wistia-popover[height=360,playerColor=313131,width=640]"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/video.png" alt="" /></a>
        </div>
      </div>
    </div>
  </section>

  <section id="row3">
    <div class="wrap container">
      <div class="row">
        <div class="col-sm-6">
          <h2>But don't forget tactics!</h2>
          <p>
            A great site without a great product is worthless. 90% of business don’t fail if they validate their market first. Make sure you’re providing sufficient value or else a great site isn’t going to do you any good.
          </p>
          <div class="quote">
              <ul class="list-inline">
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/biopic.png" class="img-circle" alt="bio pic" /></li>
                <li><p>Click <a>here</a> to continue</p></li>
              </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/graph.png" alt="growth" />
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
<!-- Wistia Lightbox --><script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
</html>
