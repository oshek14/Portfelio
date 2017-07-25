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
				<li><a href="{{ url('pricing') }}">Pricing</a></li>
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
				<h1 class="titlehead">Contact</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Call Us Now 1-318-107-432</h1>
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
				<iframe class="gmap" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=disney+paris&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=disney&amp;hnear=Paris,+%C3%8Ele-de-France,+France&amp;t=m&amp;fll=48.881877,2.535095&amp;fspn=0.512051,1.352692&amp;st=103241701817924407489&amp;rq=1&amp;ev=zo&amp;split=1&amp;ll=49.027964,2.772675&amp;spn=0.315159,0.585022&amp;z=10&amp;iwloc=D&amp;output=embed">
				</iframe>
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
					<form method="post" action="contact.php" id="contactform">
						<div class="form">
							<div class="c6 noleftmargin">
								<label>Name</label>
								<input type="text" name="name">
							</div>
							<div class="c6 noleftmargin">
								<label>E-mail address</label>
								<input type="text" name="email">
							</div>
							<label>Message</label>
							<textarea name="comment" class="ctextarea" rows="9"></textarea>
							<input type="submit" id="submit" class="button" style="font-size:12px;" value="SUBMIT">
						</div>
					</form>
				</div>
			</div>
			<div class="c4 space-top">
				<h1 class="maintitle">
				<span><i class="icon-map-marker"></i> Locations</span>
				</h1>
				<p>
					<a class="link-2" href="more.html">The Company Name Inc.</a>
				</p>
				<dl>
					<dt>2536 Zamora Road, Missisipi, 74C</dt>
					<dd><span>Telephone:</span>+1 348 271 9483</dd>
					<dd><span>FAX:</span>+1 243 794 5734</dd>
					<dd>E-mail: <a href="more.html">mail@yourweb.com</a></dd>
				</dl>
				<br/>
				<dl>
					<dt>9863 - 9867 Mill Road, Cambridge, MG09 99HT</dt>
					<dt>Zamora Road, Missisipi, 74C</dt>
					<dd><span>Telephone:</span>+1 348 271 9483</dd>
					<dd><span>FAX:</span>+1 243 794 5734</dd>
					<dd>E-mail: <a href="more.html">mail@yourweb.com</a></dd>
				</dl>
			</div>
		</div>
</div><!-- end grid -->

<!-- FOOTER
================================================== -->
@include('layouts.footer')

<!-- copyright area -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				 Your Name &copy; 2015. All Rights Reserved.
			</div>
			<div class="c6">
				<span class="right">
				Premium Template by WowThemesNet </span>
			</div>
		</div>
	</div>
</div>
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