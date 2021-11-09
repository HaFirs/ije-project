<footer class="ftco-footer ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">

				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | Ije Group with <a href="<?= base_url('nios'); ?>"
						target="_blank">NIOS</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<ul class="ftco-footer-social list-unstyled">
					<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
			stroke="#F96D00" /></svg></div>


<script src="assets/ije/js/jquery.min.js"></script>
<script src="assets/ije/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/ije/js/popper.min.js"></script>
<script src="assets/ije/js/bootstrap.min.js"></script>
<script src="assets/ije/js/jquery.easing.1.3.js"></script>
<script src="assets/ije/js/jquery.waypoints.min.js"></script>
<script src="assets/ije/js/jquery.stellar.min.js"></script>
<script src="assets/ije/js/owl.carousel.min.js"></script>
<script src="assets/ije/js/jquery.magnific-popup.min.js"></script>
<script src="assets/ije/js/jquery.animateNumber.min.js"></script>
<script src="assets/ije/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="assets/ije/js/google-map.js"></script>
<script src="assets/ije/js/main.js"></script>

<script>
	$(document).ready(function () {
		// Add scrollspy to <body>
		$('body').scrollspy({
			target: ".navbar",
			offset: 50
		});

		// Add smooth scrolling on all links inside the navbar
		$("#ftco-nav a").on('click', function (event) {
			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
				// Prevent default anchor click behavior
				event.preventDefault();

				// Store hash
				var hash = this.hash;

				// Using jQuery's animate() method to add smooth page scroll
				// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 800, function () {

					// Add hash (#) to URL when done scrolling (default click behavior)
					window.location.hash = hash;
				});
			} // End if
		});
	});
</script>

</body>

</html>