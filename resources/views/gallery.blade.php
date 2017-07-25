<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Salique Theme Multipurpose Responsive </title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
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
				<li><a href="{{ url('portfolio') }}">Portfolio</a></li>
				<li><a href="{{ url('services') }}">Services</a></li>
				<li  class="active"><a href="{{ url('gallery') }}">Gallery</a></li>
				<li><a href="{{ url('pricing') }}">Pricing</a></li>
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
				<h1 class="titlehead">Photos & Vid Gallery</h1>
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
		<div class="row">
		<div class="c12">
			<h1 class="maintitle space-top">
			<span>Pretty Gallery</span>
			</h1>
		</div>
		</div>
		<!-- begin filter -->
		<div class="row space-bot">
			<div class="c12">
				<div id="nav">
					<ul>
						<li><a href="" data-filter="*" class="selected">All Items</a></li>
						<li><a href="" data-filter=".cat1">Classic</a></li>
						<li><a href="" data-filter=".cat2">Elegant</a></li>
						<li><a href="" data-filter=".cat3">Modern</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end filter -->		
		<div class="row space-top">
			<div id="content">
				<!-- image 1 -->
				<div class="boxfourcolumns cat1 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="http://www.youtube.com/watch?v=QX2yt95Yu90"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Dalya</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 2 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Veluria</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 3 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Warm Living</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 4 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Classy Sofa</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 5 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Corner Settee</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 6 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="http://www.youtube.com/watch?v=QX2yt95Yu90"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Nostalgic</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 7 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Clean Style</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 8 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Simple & White</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 9 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Holiday Look</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 10 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Space Mov</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 11 etc -->
				
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
<script src="js/jquery.cycle.js"></script>

<!-- filterable -->
<script src="js/jquery.isotope.min.js"></script>

<!-- gallery -->
<script src="js/jquery.prettyPhoto.js"></script>

<!-- CALL opacity on hover images -->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>

<!-- CALL filtering -->
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
 
<!-- CALL lightbox prettyphoto -->
<script type="text/javascript">
  $(document).ready(function(){
    $("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
  });
</script>

</body>
</html>