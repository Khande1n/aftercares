<!DOCTYPE HTML>

<html>
	<head>
		<title>Aftercares | Home Page</title>
		<meta name="Keywords" content="AC Repair &amp; Services in Noida, AC Repairs in Noida, AC Services in Noida,
		AC Repair Services in Noida, AC Repair, AC Installation Noida, Window AC Repair &amp;
		Services in Noida, Split AC Repairs in Noida, AC Repairing Services in Noida,
		Air Condition Repairing in Noida, AC Multisplit Repair &amp; Service in Noida,
		Noida Air Conditioning Services. Geyser Repair in Noida. Fridge Repair in Noida, Refrigerator repair in Noida,
		Refrigerator Repair, Geyser AMC in Noida, Geyser Installation">
		<meta name="Description" content="AC Repair &amp; Services in Noida,
		Find Contact Numbers, Addresses of AC Repair Services, AC Repair,
		AC Installation, AC AMC, AC Vendor, Best Offers, Call +91-8130736468, +91-9990882550 for AC Repairs in Noida and more.">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- CSRF token to be sent with every post request -->
		<meta name="_token" content="{!! csrf_token() !!}"/>
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!-- SweetAlert -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/sweetalert/sweetalert.css')}}">

		<style type="text/css">
			.topcorner {
				position: absolute;
				top: 0;
				right: 0;
			}
		</style>

	</head>
	<body>

		<!-- Header -->
		<section id="header">
			<header>

				@if(!Auth::check())
				<a href="/login"><img src="{{asset('images/logoaf.png')}}" alt="" height="70" width="70" ></a>
				@endif
				@if(Auth::check())
				@if(Auth::user()->role_id == 2)
				<a href="/adminDashboard" class="button style2 scrolly-middle">Hello {{Auth::user()->name}}, go to your <h3><u>Dashboard</u></h3></a>
				@else
				<a href="/home" class="button style2 scrolly-middle">Hello {{Auth::user()->name}}, go to your <h3><u>Dashboard</u></h3></a>
				@endif
				@endif
				<!-- </button> -->

				<h1><a href="/register">AfterCares</a></h1>
				<p>
					A trusted on-demand repair service at your doorstep for Air Conditioners, Refrigerators and Geysers in Noida
				</p>
			</header>
			<footer>
				<a href="#banner" class="button style2 scrolly-middle">About Us</a>
			</footer>
		</section>

		<!-- Banner -->
		<section id="banner">
			<header>
				<h2>About Us</h2>
			</header>
			<p>
				We at AfterCares strive to make your life seamless at home or at office by keeping your
				<br />
				machines up-to-date by getting them <strong>serviced by reliable</strong> and <strong>expert technicians</strong>.
				<br />
				We <strong>value our customers</strong> and <strong>their satisfaction</strong>. To exceed
				<br />
				your expectations is our goal.
			</p>
			<footer>
				<a href="#first" class="button style2 scrolly">Our Services</a>
			</footer>
		</section>

		<!-- Feature 1 -->
		<article id="first" class="container box style1 right">
			<a href="#" class="image fit"><img src="{{asset('images/ac_new_pic.jpg')}}" alt="" /></a>
			<div class="inner">
				<header>
					<h3>AC Repair
					<br />
					Residential & Industrial</h3>
				</header>
				<p>
					Whenever your Air Conditioner stops cooling your ambience, it's time to remember AfterCares.
				</p>
			</div>
		</article>

		<!-- Feature 2 -->
		<article id="second"  class="container box style1 left">
			<a href="#" class="image fit"><img src="{{asset('images/new_gyeser.jpg')}}" alt="" /></a>
			<div class="inner">
				<header>
					<h3>GEYSER
					<br />
					REPAIR</h3>
				</header>
				<p>
					Whenever your geyser stops giving hot water when you need it most, it's time to remember AfterCares.
				</p>
			</div>
		</article>

		<!-- Feature 3 -->
		<article class="container box style1 right">
			<a href="#" class="image fit"><img src="{{asset('images/fridge.jpg')}}" alt="" /></a>
			<div class="inner">
				<header>
					<h3>REFRIGERATOR
					<br />
					REPAIR</h3>
				</header>
				<p>
					Whenever your Refrigerator fails to quench for cold water or save your essentials from rotting, it's time to remember AfterCares.
				</p>
			</div>
		</article>

		<!-- Feature 4 -->
		<article class="container box style1 left">
			<a href="#" class="image fit"><img src="{{asset('images/Rent.jpg')}}" alt="" /></a>
			<div class="inner">
				<header>
					<h3>Rent an
					<br />
					Air Conditioner</h3>
				</header>
				<p>
					Whenever you are in a dilemma over whether you should buy or rent an air conditioner, it's time to remember AfterCares.
				</p>
			</div>
		</article>

		<!-- Portfolio -->
		<article class="container box style2">
			<header>
				<h2>Sign Up Now</h2>
				<!-- <p>Sign up and submit your <br />
				Service Request.</p> -->
				<footer>
					<a href="/register" class="button ">Sign Up</a>
				</footer>
				<footer>
					<a href="/login" class="button">Login</a>
				</footer>
			</header>

			<!-- <div class="inner gallery">
			<div class="row 0%">
			<div class="3u 12u(mobile)"><a href="images/fulls/01.jpg" class="image fit"><img src="{{asset('images/thumbs/01.jpg')}}" alt="" title="Ad infinitum" /></a></div>
			<div class="3u 12u(mobile)"><a href="images/fulls/02.jpg" class="image fit"><img src="{{asset('images/thumbs/02.jpg')}}" alt="" title="Dressed in Clarity" /></a></div>
			<div class="3u 12u(mobile)"><a href="images/fulls/03.jpg" class="image fit"><img src="{{asset('images/thumbs/03.jpg')}}" alt="" title="Raven" /></a></div>
			<div class="3u 12u(mobile)"><a href="images/fulls/04.jpg" class="image fit"><img src="{{asset('images/thumbs/04.jpg')}}" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
			</div> -->
			<!-- <div class="row 0%">
			<div class="3u 12u(mobile)"><a href="images/fulls/05.jpg" class="image fit"><img src="{{asset('images/thumbs/05.jpg')}}" alt="" title="Cherish" /></a></div>
			<div class="3u 12u(mobile)"><a href="images/fulls/06.jpg" class="image fit"><img src="{{asset('images/thumbs/06.jpg')}}" alt="" title="Different." /></a></div>
			<div class="3u 12u(mobile)"><a href="images/fulls/07.jpg" class="image fit"><img src="{{asset('images/thumbs/07.jpg')}}" alt="" title="History was made here" /></a></div>
			<div class="3u 12u(mobile)"><a href="images/fulls/08.jpg" class="image fit"><img src="{{asset('images/thumbs/08.jpg')}}" alt="" title="People come and go and walk away" /></a></div>
			</div> -->
			<!-- </div> -->
		</article>

		<!-- Contact -->
		<article class="container box style3">
			<header>
				<h2>Contact Us</h2>
				<p>
					B106, First floor, Sector 63, Noida, (UP) -201309
				</p>
				<p>
					support@aftercares.in
				</p>
				<p>
					+91-8130736468, +91-9990882550
				</p>
			</header>
			<form method="post" action="/website/email">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row 50%">
					<div class="6u 12u$(mobile)">
						<input type="text" class="text" name="name" placeholder="Name" required/>
					</div>
					<div class="6u$ 12u$(mobile)">
						<input type="text" class="text" name="email" placeholder="Email" required/>
					</div>
					<div class="12u$">
						<textarea name="message" placeholder="Message" required></textarea>
					</div>
					<div class="12u$">
						<ul class="actions">
							<li>
								<input type="submit" value="Send Message" id="websiteEmail"/>
							</li>
						</ul>
					</div>
				</div>
			</form>
		</article>

		<section id="footer">
			<ul class="icons">
				<li>
					<a href="https://twitter.com/aftercares" class="icon fa-twitter"><span class="label">Twitter</span></a>
				</li>
				<li>
					<a href="https://www.facebook.com/aftercares/" class="icon fa-facebook"><span class="label">Facebook</span></a>
				</li>
				<li>
					<a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a>
				</li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>
						&copy; 2016 AfterCares. All rights reserved.
					</li><!-- <li>Design: <a href="http://html5up.net">HTML5 UP</a></li> -->
				</ul>
			</div>
		</section>



		<!-- Scripts -->
		<!-- jQuery 2.1.4 -->
		<script src="{{asset('assets/jQuery/jQuery-2.1.4.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.poptrox.min.js')}}"></script>
		<script src="{{asset('assets/js/skel.min.js')}}"></script>
		<script src="{{asset('assets/js/util.js')}}"></script>
		<!-- SweetAlert -->
		<script src="{{asset('assets/sweetalert/sweetalert.min.js')}}"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="{{asset('assets/js/main.js')}}"></script>
		<!-- CSRF token with every request -->
		<script type="text/javascript">
			$.ajaxSetup({
				headers : {
					'X-CSRF-Token' : $('meta[name=_token]').attr('content')
				}
			});
		</script>

	</body>
</html>

