<footer>
  <div class="container">
    <div id="footer" class="row">
      <p>Designed deliberately with love by <a href="http://twitter.com/masoninthesis" class="twitter-footer" target="_blank">@masoninthesis</a>.</p>
	    <p>&copy; 2014 Jackalope | all rights reserved.</p>
	    <ul class="bs-docs-footer-links muted">
	      <li>Currently v0.2.0</li>
	      <li>&middot;</li>
	      <li><a href="https://github.com/masoninthesis/">GitHub</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/">Services</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalope.io/">Themes</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalope.io/">Tutorials</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/">About</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemedia.com/blog/">Blog</a></li>
	      <li>&middot;</li>
	      <li><a href="http://jackalopemeda.com/contact/">Contact</a></li>
	    </ul>
			<br />
			<center><svg width="30" height="33" class="logo"><?php get_template_part( 'assets/img/svg/inline', 'logo.svg' ); ?></center>
    </div>
  </div>

</footer>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <center><svg width="30" height="33" class="logo logo-modal"><?php get_template_part( 'assets/img/svg/inline', 'logo.svg' ); ?></center>
      <center><h3>We haven't launched our new site yet,<br>be the first to know when we do!</h3></center>
      <div class="modal-body">
        <center>
          <form class="form-inline" id="before_header" action="//masonlawlor.us8.list-manage.com/subscribe/post?u=284e326d5adb7f537c7cc1bde&amp;id=3e5794123d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
            <button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="btn hero-btn btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
          </form>
        </center>
      </div><!-- /optin -->
    </div>
  </div>
</div>

<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }

    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 100);
      }
    }

    $(document).ready(function () {
      timeOut();
      stickyElement();
    });

  </script>
