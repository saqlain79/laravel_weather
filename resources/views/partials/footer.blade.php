<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<input type="text" placeholder="Enter your email to subscribe...">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

					<p class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{asset('frontend/js/plugins.js')}}"></script>
		<script src="{{asset('frontend/js/app.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
		<!-- <script>
			(function(){
				var placesAutocomplete = places({
					appId: 'PU3MZQGTUY',
					apiKey: 'fc050796fa8fe24a3dcb7140fca462c0',
					container: document.querySelector('#address')
				});

				var $address = document.querySelector('#address-value')
				placesAutocomplete.on('change', function(e) {
					$address.textContent = e.suggestion.value
				});

				placesAutocomplete.on('clear', function() {
					$address.textContent = 'none';
				});
			})();
		</script> -->
		
	</body>

</html>