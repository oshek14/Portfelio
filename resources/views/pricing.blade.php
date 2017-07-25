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
				<li class="active"><a href="{{ url('pricing') }}">Pricing</a></li>
				<li><a href="{{ url('about') }}">About</a></li>
				<li><a href="{{ url('contact') }}">Contact</a></li>			
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
				<h1 class="titlehead">Pricing Table</h1>
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
		<div class="shadowundertop">
		</div>
		<div class="row">
			<!-- begin pricing style 1 -->
			<div class="c12">
				<h1 class="maintitle ">
				<span>Pricing Style</span>
				</h1>
				<div class="vuzz-pricing-table c3">
					<div class="vuzz-pricing">
						<div class="vuzz-pricing-header">
							<h5>Gold</h5>
							<div class="vuzz-pricing-cost">
								$29.99
							</div>
							<div class="vuzz-pricing-per">
								per month
							</div>
						</div>
						<div class="vuzz-pricing-content">
							<ul>
								<li>5 products</li>
								<li>1 image per product</li>
								<li>basic stats</li>
								<li>non commercial</li>
							</ul>
						</div>
						<div class="vuzz-pricing-button">
							<a href="#" class="vuzz-button buttonprice" target="_self" rel="nofollow"><span class="vuzz-button-inner">Sign Up</span></a>
						</div>
					</div>
				</div>
				<div class="vuzz-pricing-table c3">
					<div class="vuzz-pricing">
						<div class="vuzz-pricing-header">
							<h5>Premium</h5>
							<div class="vuzz-pricing-cost">
								$29.99
							</div>
							<div class="vuzz-pricing-per">
								per month
							</div>
						</div>
						<div class="vuzz-pricing-content">
							<ul>
								<li>5 products</li>
								<li>1 image per product</li>
								<li>basic stats</li>
								<li>non commercial</li>
							</ul>
						</div>
						<div class="vuzz-pricing-button">
							<a href="#" class="vuzz-button buttonprice" target="_self" rel="nofollow"><span class="vuzz-button-inner">Sign Up</span></a>
						</div>
					</div>
				</div>
				<div class="vuzz-pricing-table c3">
					<div class="vuzz-pricing popular">
						<div class="vuzz-pricing-header">
							<h5>Featured</h5>
							<div class="vuzz-pricing-cost">
								$29.99
							</div>
							<div class="vuzz-pricing-per">
								per month
							</div>
						</div>
						<div class="vuzz-pricing-content">
							<ul>
								<li>5 products</li>
								<li>1 image per product</li>
								<li>basic stats</li>
								<li>non commercial</li>
							</ul>
						</div>
						<div class="vuzz-pricing-button">
							<a href="#" class="vuzz-button buttonprice" target="_self" rel="nofollow"><span class="vuzz-button-inner">Sign Up</span></a>
						</div>
					</div>
				</div>
				<div class="vuzz-pricing-table c3">
					<div class="vuzz-pricing">
						<div class="vuzz-pricing-header">
							<h5>Diamond</h5>
							<div class="vuzz-pricing-cost">
								$29.99
							</div>
							<div class="vuzz-pricing-per">
								per month
							</div>
						</div>
						<div class="vuzz-pricing-content">
							<ul>
								<li>5 products</li>
								<li>1 image per product</li>
								<li>basic stats</li>
								<li>non commercial</li>
							</ul>
						</div>
						<div class="vuzz-pricing-button">
							<a href="#" class="vuzz-button buttonprice" target="_self" rel="nofollow"><span class="vuzz-button-inner">Sign Up</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- end pricing style 1 -->
		</div>
		<div class="row space-top">
			<div class="c12 space-top">
				<h1 class="maintitle ">
				<span>Pricing Style Alt</span>
				</h1>
				<!-- begin pricing style 2 -->
				<div id="pricing-table" class="clear">
					<div class="plan">
						<h3>Enterprise<span>$59</span></h3>
						<a class="signup" href="">Sign up</a>
						<ul>
							<li><b>10GB</b> Disk Space</li>
							<li><b>100GB</b> Monthly Bandwidth</li>
							<li><b>20</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>
						</ul>
					</div>
					<div class="plan" id="most-popular">
						<h3>Professional<span>$29</span></h3>
						<a class="signup" href="">Sign up</a>
						<ul>
							<li><b>5GB</b> Disk Space</li>
							<li><b>50GB</b> Monthly Bandwidth</li>
							<li><b>10</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>
						</ul>
					</div>
					<div class="plan">
						<h3>Standard<span>$17</span></h3>
						<a class="signup" href="">Sign up</a>
						<ul>
							<li><b>3GB</b> Disk Space</li>
							<li><b>25GB</b> Monthly Bandwidth</li>
							<li><b>5</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>
						</ul>
					</div>
					<div class="plan">
						<h3>Basic<span>$9</span></h3>
						<a class="signup" href="">Sign up</a>
						<ul>
							<li><b>1GB</b> Disk Space</li>
							<li><b>10GB</b> Monthly Bandwidth</li>
							<li><b>2</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>
						</ul>
					</div>
				</div>
				<!-- end pricing style 2 -->
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

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>
</body>
</html>