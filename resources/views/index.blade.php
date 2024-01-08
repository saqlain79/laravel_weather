
<!DOCTYPE html>
@include('partials.header')


	<body>
		
	<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">Company name</h1>
							<small class="site-description">tagline goes here</small>
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="news.html">News</a></li>
							<li class="menu-item"><a href="live-cameras.html">Live cameras</a></li>
							<li class="menu-item"><a href="photos.html">Photos</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<div class="hero" data-bg-image="images/banner.png">
				<div class="container mx-auto">
						<input type="search" id="address" class="form-control" placeholder="Find your location...">
						<!-- <input type="submit" value="Find"> -->
						<p>Selected: <strong id="address-value">none</strong></p>

				</div>
			</div>
			
			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">{{Carbon\Carbon::createFromTimestamp($current['dt'])->format('l')}}</div>
								<div class="date">{{Carbon\Carbon::createFromTimestamp($current['dt'])->format('Y-m-d')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">{{$current['name']}}</div>
								<div class="degree">
									<div class="num">{{round($current['main']['temp'])}}<sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="https://openweathermap.org/img/wn/{{$current['weather']['0']['icon']}}@4x.png" alt="icon" width=90>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">Feels: {{round($current['main']['feels_like'])}}<sup>o</sup>C</span>
								<span><img src="images/icon-umberella.png" alt="">H: {{round($current['main']['humidity'])}}</span>
								<span><img src="images/icon-wind.png" alt="">W: {{round($current['wind']['speed'])}}km/h</span>
								<span><img src="images/icon-compass.png" alt="">{{ucfirst($current['weather']['0']['description'])}}</span>
							</div>
						</div>
						@foreach($future['list'] as $day)
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">{{Carbon\Carbon::createFromTimestamp($day['dt'])->format('Y-m-d')}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="https://openweathermap.org/img/wn/{{$day['weather']['0']['icon']}}.png" alt="icon" width=48>
								</div>
								<div class="degree">{{round($current['main']['temp'])}}<sup>o</sup>C</div>
								<small>{{round($current['main']['temp_max'])}}<sup>o</sup></small><br>
								<small>{{round($current['main']['temp_min'])}}<sup>o</sup></small>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
			<!-- <main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Live cameras</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-1.jpg" alt=""></figure>
									<h3 class="location">New York</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-2.jpg" alt=""></figure>
									<h3 class="location">Los Angeles</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-3.jpg" alt=""></figure>
									<h3 class="location">Chicago</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-4.jpg" alt=""></figure>
									<h3 class="location">London</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block" data-bg-color="#262936">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="news">
									<div class="date">06.10</div>
									<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo saepe assumenda dolorem modi, expedita voluptatum ducimus necessitatibus. Asperiores quod reprehenderit necessitatibus harum, mollitia, odit et consequatur maxime nisi amet doloremque.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<div class="date">06.10</div>
									<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
									<p>Nobis architecto consequatur ab, ea, eum autem aperiam accusantium placeat vitae facere explicabo temporibus minus distinctio cum optio quis, dignissimos eius aspernatur fuga. Praesentium totam, corrupti beatae amet expedita veritatis.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<div class="date">06.10</div>
									<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
									<p>Enim impedit officiis placeat qui recusandae doloremque possimus, iusto blanditiis, quam optio delectus maiores. Possimus rerum, velit cum natus eos. Cumque pariatur beatae asperiores, esse libero quas ad dolorem. Voluptates.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">Application features</h2>
								<ul class="arrow-feature">
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Weather analyssis</h2>
								<ul class="arrow-list">
									<li><a href="#">Accusantium doloremque laudantium rem aperiam</a></li>
									<li><a href="#">Eaque ipsa quae ab illo inventore veritatis quasi</a></li>
									<li><a href="#">Architecto beatae vitae dicta sunt explicabo</a></li>
									<li><a href="#">Nemo enim ipsam voluptatem quia voluptas</a></li>
									<li><a href="#">Aspernatur aut odit aut fugit, sed quia consequuntur</a></li>
									<li><a href="#">Magni dolores eos qui ratione voluptatem sequi</a></li>
									<li><a href="#">Neque porro quisquam est qui dolorem ipsum quia</a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Awesome Photos</h2>
								<div class="photo-grid">
									<a href="#"><img src="images/thumb-1.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-2.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-3.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-4.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-5.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-6.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-7.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-8.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-9.jpg" alt="#"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>  -->
			<!-- .main-content -->

			@include('partials.footer')