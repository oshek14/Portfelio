<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Salique Theme Multipurpose Responsive </title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts at the bottom of the document -->
</head>
<body>
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="{{ url('/') }}">
			<img src="images/logo.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li><a href="{{ url('/') }}"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				<li><a href="{{ url('portfolio') }}">Portfolio</a></li>
				<li><a href="{{ url('services') }}">Services</a></li>
				<li><a href="{{ url('gallery') }}">Gallery</a></li>
				
				<li><a href="{{ url('about') }}">About</a></li>
				<li class="active"><a href="{{ url('contact') }}">Contact</a></li>			
			</ul>
			</nav>
		</div>
	</div>
</div>

<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
			@if(Session::get('success'))
				<h1 class="titlehead">{{Session::get('success')}}</h1>
			@else
				<h1 class="titlehead">Contact</h1>
				@endif
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Call Us Now +995 555 18 00 67</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row space-bot">
			<div class="c12">
				<iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJMV2CYNZyREARFXt_sWKNst4&key=AIzaSyDWWgQm9Noq8xwYmlu0O_aT5nXpCsHte28" allowfullscreen></iframe>
			</div>
		</div>
		<div class="row space-top">
			<!-- CONTACT FORM -->
			<div class="c8 space-top">
				<h1 class="maintitle">
				<span><i class="icon-envelope-alt"></i> Get in Touch</span>
				</h1>
				<div class="wrapcontact">
					<div class="done">
						<div class="alert-box success ctextarea">
							 Your message has been sent. Thank you! <a href="" class="close">x</a>
						</div>
					</div>
					<form class="form-horizontal" role="form"  id="contactform" method="POST" action="{{ url('/sendmessage') }}">
						{{ csrf_field() }}
							<div class="c6 noleftmargin">
								<label>Name</label>
								<input type="text" name="name">
							</div>
						
							<div class="c6 noleftmargin">
								<label>Mobile</label>
								<input type="text" name="mobile">
							</div>
							<label>What's Your Inquiry?</label>
							<textarea name="comment" class="ctextarea" rows="9"></textarea>
							<input type="submit" id="submit" class="button" style="font-size:12px;" value="SUBMIT">
						
					</form>
				</div>
			</div>
			<div class="c4 space-top">
				<h1 class="maintitle">
				<span><i class="icon-map-marker"></i> Locations</span>
				</h1>
				<p>
					<a class="link-2">OUR ADDRESS</a>
				</p>
				<dl>
					<dt>GEORGIA,TBILISI</dt>
					<dd><span>Telephone:</span>+995 555 18 00 67</dd>
					
					<dd>E-mail: <a href="more.html">gioskofield@gmail.com</a></dd>
				</dl>
				<br/>
				
			</div>
		</div>
</div><!-- end grid -->

<!-- FOOTER
================================================== -->
@include('layouts.footer')


<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- contact form -->
<script src="js/contact.js"></script>

</body>
</html>