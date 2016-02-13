<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Aftercares | Home Page</title>
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
 			.topcorner{
   			position:absolute;
   			top:0;
   			right:0;
  			}
		</style>

	</head>
	<body>
			
		<!-- Header -->
			<section id="header">
				<div class="topcorner">
					<!-- <button class="style2">
						<a href="/register">Register</a
					</button> -->
					<!-- <button class="style2">
						<a href="/login">Login</a
					</button> -->
				</div>
				<header>
					<h1><a href="/register">AfterCares</a></h1>
					<p>A trusted on-demand repair service at your doorstep for Air Conditioners, Refrigerators and Geysers in Noida</p>
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
				<p>We at AfterCares strive to make you life seamless at home or office by keeping your <br /> 
				machine up-to-date by getting them <strong>serviced by reliable</strong> and <strong>expert technicians</strong>.<br />
				We <strong>value our customers</strong> and <strong>their satisfaction</strong>. To exceed <br />
				your expectations is our mission</p>
				<footer>
					<a href="#first" class="button style2 scrolly">Our Services</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="{{asset('images/ac_new_pic.jpg')}}" alt="" /></a>
				<div class="inner">
					<header>
						<h3>AC Repair<br />
						Residential & Industrial</h3>
					</header>
					<p>Whenever your Air Conditioner stops cooling your ambience, it's time to remember AfterCares.</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article id="second"  class="container box style1 left">
				<a href="#" class="image fit"><img src="{{asset('images/new_gyeser.jpg')}}" alt="" /></a>
				<div class="inner">
					<header>
						<h3>GEYSER <br />
						REPAIR</h3>
					</header>
					<p>Whenever your geyser stops giving hot water when you need it most, it's time to remember AfterCares.</p>
				</div>
			</article>

		<!-- Feature 3 -->
			<article class="container box style1 right">
				<a href="#" class="image fit"><img src="{{asset('images/fridge.jpg')}}" alt="" /></a>
				<div class="inner">
					<header>
						<h3>REFRIGERATOR <br />
						REPAIR</h3>
					</header>
					<p>Whenever your Refrigerator fails to quech for cold water or save your essentials from rotting, it's time to remember AfterCares.</p>
				</div>
			</article>
			

		<!-- Feature 4 -->
			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="{{asset('images/rsz_2rent.jpg')}}" alt="" /></a>
				<div class="inner">
					<header>
						<h3>Rent an <br />
						Air Conditioner</h3>
					</header>
					<p>Whenever you are in a delimma over whether you should buy or rent an air conditioner, it's time to remember AfterCares.</p>
				</div>
			</article>
			
		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Sign Up Now</h2>
					<!-- <p>Sign up and submit your <br />
					Service Request.</p> -->
					<footer>
						<a href="/auth/register" class="button ">Sign Up</a>
					</footer>
					<footer>
						<a href="/auth/login" class="button">Login</a>
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
					<p>B106, First floor, Sector 63, Noida, (UP) -201309</p>
					<p>support@aftercares.in</p>
					<p>+91-8130736468, +91-9990882550 </p>
 				</header>
				<form method="post" <!-- action="/website/email -->">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="row 50%">
						<div class="6u 12u$(mobile)"><input type="text" class="text" name="name" placeholder="Name" required/></div>
						<div class="6u$ 12u$(mobile)"><input type="text" class="text" name="email" placeholder="Email" required/></div>
						<div class="12u$">
							<textarea name="message" placeholder="Message" required></textarea>
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Send Message" id="websiteEmail"/></li>
							</ul>
						</div>
					</div>
				</form>
			</article>

		<!-- Generic -->
		<!--
			<article class="container box style3">
				<header>
					<h2>Generic Box</h2>
					<p>Just a generic box. Nothing to see here.</p>
				</header>
				<section>
					<header>
						<h3>Paragraph</h3>
						<p>This is a subtitle</p>
					</header>
					<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
					habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
					leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
					amet risus elit.</p>
				</section>
				<section>
					<header>
						<h3>Blockquote</h3>
					</header>
					<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
					tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
				</section>
				<section>
					<header>
						<h3>Divider</h3>
					</header>
					<p>Donec consectetur <a href="#">vestibulum dolor et pulvinar</a>. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
					<hr />
					<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
				</section>
				<section>
					<header>
						<h3>Unordered List</h3>
					</header>
					<ul class="default">
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ul>
				</section>
				<section>
					<header>
						<h3>Ordered List</h3>
					</header>
					<ol class="default">
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ol>
				</section>
				<section>
					<header>
						<h3>Table</h3>
					</header>
					<div class="table-wrapper">
						<table class="default">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Description</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="3"></td>
									<td>100.00</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</section>
				<section>
					<header>
						<h3>Form</h3>
					</header>
					<form method="post" action="#">
						<div class="row">
							<div class="6u">
								<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
							</div>
							<div class="6u">
								<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<select name="department" id="department">
									<option value="">Choose a department</option>
									<option value="1">Manufacturing</option>
									<option value="2">Administration</option>
									<option value="3">Support</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<textarea name="message" id="message" placeholder="Enter your message"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="Submit" /></li>
									<li><input type="reset" class="style3" value="Clear Form" /></li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</article>
		-->

		<section id="footer">
			<ul class="icons">
				<li><a href="https://twitter.com/aftercares" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/aftercares/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<!-- <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li> -->
				<!-- <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li> -->
				<!-- <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li> -->
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; 2016 AfterCares. All rights reserved.</li><!-- <li>Design: <a href="http://html5up.net">HTML5 UP</a></li> -->
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
   				headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
			});
	</script>
	
	</body>
</html>


