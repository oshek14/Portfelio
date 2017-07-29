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
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts are at the bottom of the document -->
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
				
				
				<li class="active"><a href="{{ url('about') }}">About</a></li>
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
				<h1 class="titlehead">About Us</h1>
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
		<div class="row">
			<div class="c8">
				<h1 class="maintitle ">
				<span>OUR HISTORY</span>
				</h1>
				<p>
					<span class="dropcap">J</span>CODE IS HERE. WE ARE A NEW FOCUSED TEAM THAT TAKES CARE OF YOUR INTERESTS.WHY NOW? WE JUST LEARNED HOW THIS SYSTEM WORKS AND HOW PROGRAMMING CHANGES OUR LIVES. WE LOVE WHAT WE DO AND WE WANT TO HELP YOU AND ALSO GET MOTIVATION FROM IT. WHY LOW PRICES? EVERYONE KNOWS WHEN YOU ARE NEW TO BUSINESS, TO CATCH CLIENTS YOU GOTTA GIVE THEM SOMETHING TO HOLD ON TO. WE ARE ALSO COMPUTER SCIENCE BACHELORS ! WHY NOT TRY TO CONTACT US?MAYBE WE GIVE YOU WHAT OTHERS CAN'T AND BOTH OF US ARE HAPPY AND SATISFIED WITH WHAT WE HAVE DONE
				</p>
				
			</div>
			<div class="c4">
				<h1 class="maintitle">
				<span>SKILLS</span>
				</h1>
				<ul id="skill">
					<li><span class="bar progressdefault" style="width:100%;"></span>
					<h3>QUALITY 100%</h3>
					</li>
					<li><span class="bar progressdefault" style="width:100%;"></span>
					<h3>TRUST 100%</h3>
					</li>
					<li><span class="bar progressdefault" style="width:100%;"></span>
					<h3>LOW PRICE 100%</h3>
					</li>
				</ul>
			</div>
		</div>
		<!-- OUR TEAM
		================================================== -->
		
</div><!-- end grid -->

<!-- FOOTER
================================================== -->
@include('layouts.footer')

<!-- copyright area -->

<!-- JAVASCRIPTS
================================================== -->
<!-- all-->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- testimonial rotator -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- CALL Showcase - change 5 from min:5 and max:5 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 5,
						max: 5
					}
				}
			});
		});	
</script>

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

<!-- CALL tabs -->
<script type="text/javascript">
$(document).ready(function() {	
	$('#tabs li a:not(:first)').addClass('inactive');
	$('.container:not(:first)').hide();	
	$('#tabs li a').click(function(){		
		var t = $(this).attr('href');
		if($(this).hasClass('inactive')){ //added to not animate when active
			$('#tabs li a').addClass('inactive');		
			$(this).removeClass('inactive');
			$('.container').hide();
			$(t).fadeIn('slow');	
		}			
		return false;
	}) //end click
});
</script>
</body>
</html>