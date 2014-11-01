		<footer class="footer" role="contentinfo">

			<div class="container-fluid">
				<div class="col-sm-4">
					<strong>ABOUT US</strong>
					<p>We're innovation thinkers ready to help grow your business by creating valuable customer experiences.</p>
					<a href="#" class="btn btn-lg btn-primary">LEARN MORE</a>
				</div>
				<div class="col-sm-4">
					<strong>OUR WORK</strong>
					<p>We translate your business goals into solutions that facilitate positive customer perceptions and relationships.</p>
					<a href="#" class="btn btn-lg btn-primary">SEE OUR WORK</a>
				</div>
				<div class="col-sm-4">
					<strong>CONNECT</strong>
					<p style="padding-bottom: 0px;">We'd love to hear from (and about) you! Let's meet and tweet!</p>
					<p style="padding-top: 0px; padding-bottom: 0px;">+ 913 485-2352</p>
					<p style="padding-top: 0px; padding-bottom: 0px;"><img src="http://localhost/ziv/img/twitter.png" style="height: 14px;"> TWITTER &nbsp;&nbsp; <img src="http://localhost/ziv/img/linkedin.png" style="height: 14px;"> LINKEDIN</p>
				</div>

			</div>

			<div class="container-fluid">
				<!-- copyright -->
				<div class="copyright">
					&copy;
					<?php echo date( 'Y'); ?> Copyright ZIV Inc. | <a href="#">Terms</a>
				</div>
				<!-- /copyright -->
			</div>

		</footer>

	</body>

<script>
	$(function () {
		$('.container-header').data('size', 'big');
	});

	$(window).scroll(function () {
		if ($(document).scrollTop() > 175) {
			if ($('.container-header').data('size') == 'big') {
				$('.container-header').data('size', 'small');
				$('.container-header').removeClass('container-header-bigger');
				$('.container-header').addClass('container-header-smaller');
				$('.logo-img').removeClass('bigger-logo');
				$('.logo-img').addClass('smaller-logo');
				$('.menu').removeClass('menu-bigger');
				$('.menu').addClass('menu-smaller');
			}
		} else {
			if ($('.container-header').data('size') == 'small') {
				$('.container-header').data('size', 'big');
				$('.container-header').removeClass('container-header-smaller');
				$('.container-header').addClass('container-header-bigger');
				$('.logo-img').removeClass('smaller-logo');
				$('.logo-img').addClass('bigger-logo');
				$('.menu').removeClass('menu-smaller');
				$('.menu').addClass('menu-bigger');
			}
		}
	});
</script>

</html>
