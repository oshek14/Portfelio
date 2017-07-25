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
				<li class="active"><a href="{{ url('/') }}"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				<li><a href="{{ url('portfolio') }}">Portfolio</a></li>
				<li><a href="{{ url('services') }}">Services</a></li>
				<li><a href="{{ url('gallery') }}">Gallery</a></li>
				<li><a href="{{ url('pricing') }}">Pricing</a></li>
				<li><a href="{{ url('about') }}">About</a></li>
				<li><a href="{{ url('contact') }}">Contact</a></li>			
			</ul>
			</nav>
		</div>
	</div>
</div>