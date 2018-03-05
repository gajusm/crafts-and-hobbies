<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3>Follow Us On</h3>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta cupiditate, necessitatibus. Vel, neque et tempore porro, a magnam nostrum perferendis voluptatum, quidem repudiandae voluptate soluta dignissimos alias suscipit. Eius, sequi!</p>
				</div>
				<div class="col-sm-4">
					<h3>Quick Links</h3>
					<ul class="fLinks">
						<li><a href="#">About us</a></li>
						<li><a href="#">Our office</a></li>
						<li><a href="#">Delivery</a></li>
						<li><a href="#">Store</a></li>
						<li><a href="#">Guarantee</a></li>
						<li><a href="#">Buy Giftcard</a></li>
						<li><a href="#">Terms & Condition</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h3>Get in Touch</h3>
					<p>
						Address: PO Box 16122 Collins Street West Victoria <br>
						Phone: +777 2345 7885 <br>
						Fax: +777 2345 7885 <br>
						Hours: 7 Days a week from 10:00 am
					</p>
				</div>
			</div>
		</div>
		<div class="fotterBottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">Copyright 2018 by <span class="highlight">BRAND</span>, All right reserved</div>
					<div class="col-sm-6"></div>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/propeller.min.js"></script>
	<script src="js/select2.full.js"></script>
	<script src="js/pmd-select2.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/product/listing.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(function() {
			window.listing.setProductTile();
			$(window).resize(function(event) {
				window.listing.setProductTile();
			});
			<!-- Selectbox with search -->
			$(".select-with-search").select2({
				theme: "bootstrap"
			});
		})
	</script>
</body>
</html>