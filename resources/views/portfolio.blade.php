<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Salique Theme Multipurpose Responsive </title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
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
				<li class="active"><a href="{{ url('portfolio') }}">Portfolio</a></li>
				<li><a href="{{ url('services') }}">Services</a></li>
				
				
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
				<h1 class="titlehead">A LITTLE PORTFOLIO</h1>
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
		<div class="shadowundertop">
		</div>
		<!-- begin categories -->
		<div class="row space-bot">
			<div class="c12">
				<h1 class="maintitle space-top">
				<span>EXPLORE OUR WORK</span>
				</h1>
				<div id="nav">
					<ul class="option-set">
						<li><a href="" data-filter="*" class="selected">Show All</a></li>
						<li><a href="" data-filter=".cat1">Business</a></li>
						<li><a href="" data-filter=".cat2">Light</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end categories -->
		<div class="row space-top">
			<div id="content">
				<!-- box 1 -->
				<div class="boxthreecolumns cat1">
					<div class="boxcontainer">
						<div class="mosaic-block cover">
							<div class="mosaic-overlay">
								<img src="images/nordic.jpg" alt="">
							</div>
							<a href="https://www.nordiccar.com/" target="_blank" class="mosaic-backdrop blue">
							<div class="details">
								<b></b>
								<p>
									 via JCode
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Nordiccar</a></h1>
						
					</div>
				</div>
				<!-- box 2 -->
				<div class="boxthreecolumns cat1">
					<div class="boxcontainer">
						<div class="mosaic-block cover">
							<div class="mosaic-overlay">
								<img src="images/laser.jpg" alt="">
							</div>
							<a href="https://lasercombat.ge/" target="_blank" class="mosaic-backdrop orange">
							<div class="details">
								<b></b>
								<p>
									 via JCode
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Laser Combat</a></h1>
						
					</div>
				</div>
				<!-- box 3 -->
				<div class="boxthreecolumns cat1">
					<div class="boxcontainer">
						<div class="mosaic-block cover">
							<div class="mosaic-overlay">
								<img src="images/dublin.jpg" alt="">
							</div>
							<a href="https://www.dublinairporttaxis.com/" target="_blank" class="mosaic-backdrop green">
							<div class="details">
								<b></b>
								<p>
									 via JCode
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Dublin Airport</a></h1>
						
					</div>
				</div>
				<!-- box 4 -->
				<div class="boxthreecolumns cat2">
					<div class="boxcontainer">
						<div class="mosaic-block cover">
							<div class="mosaic-overlay">
								<img src="images/love.jpg" alt="">
							</div>
							<a href="http://lovequad.com/" target="_blank" class="mosaic-backdrop orangered">
							<div class="details">
								<b></b>
								<p>
									 via JCode
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Lovequad</a></h1>
						
					</div>
				</div>
				<!-- box 5 -->
				<div class="boxthreecolumns cat2 cat3">
					<div class="boxcontainer">
						<div class="mosaic-block cover">
							<div class="mosaic-overlay">
								<img src="images/nick.jpg" alt="">
							</div>
							<a href="http://web-nicki.com/" target="_blank" class="mosaic-backdrop green">
							<div class="details">
								<b></b>
								<p>
									 via JCode
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Web-Nicki</a></h1>
						
					</div>
				</div>
				<!-- box 6 -->

				<div class="boxthreecolumns cat2 cat3">
					<div class="boxcontainer">
						<div class="mosaic-block cover">
							<div class="mosaic-overlay">
								<img src="images/winner.jpg" alt="">
							</div>
							<a href="http://winnertipshere.com/" target="_blank" class="mosaic-backdrop blue">
							<div class="details">
								<b></b>
								<p>
									 via JCode
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Winner Tips</a></h1>
						
					</div>
				</div>
			
				<!-- box 7 etc -->
			</div>
		</div>
</div><!-- end grid -->
<!-- FOOTER
================================================== -->
@include('layouts.footer')

<!-- copyright area -->

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

<!-- filtering -->
<script src="js/jquery.isotope.min.js"></script>

<!-- hover effects -->
<script type="text/javascript" src="js/mosaic.1.0.1.min.js"></script>

<!-- CALL hover effects -->
<script type="text/javascript">  			
			$(document).ready(function($){				
				$('.cover').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'578'		//Horizontal position on hover
				});		    
		    });		    
</script>

<!-- CALL isotope filtering -->
<script>
$(document).ready(function(){
var $container = $('#content');
  $container.imagesLoaded( function(){
        $container.isotope({
	filter: '*',
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
});
});
$('#nav a').click(function(){
  var selector = $(this).attr('data-filter');
    $container.isotope({ 
	filter: selector,
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
  });
  return false;
});
$('#nav a').click(function (event) {
    $('a.selected').removeClass('selected');
    var $this = $(this);
    $this.addClass('selected');
    var selector = $this.attr('data-filter');
    $container.isotope({
         filter: selector
    });
    return false; // event.preventDefault()
});
});
 </script>
</body>
</html>