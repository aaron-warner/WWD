@extends('main')

@section('title', 'Contact')

@section('content')

	<header class="cd-header">
		<div id="cd-logo">
			<a href="/">
				<img src="{{ asset('images/wwd-w-logo.png') }}" width="100" height="50" class="img-responsive" alt="Warner Web Design logo">
			</a>
		</div>
		<nav class="cd-primary-nav">
			<ul>
				<!-- inser more links here -->
				<li><a href="/">Home</a></li>
				<li><a href="/portfolio">Portfolio</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav> <!-- cd-primary-nav -->
	</header>
	<section id="cd-intro">
		<div id="cd-intro-tagline">
			<h1>Warner Web Design</h1>
			<a href="/portfolio" class="cd-btn">View Portfolio</a>
		</div> <!-- #cd-intro-tagline -->
	</section> <!-- #cd-intro -->

	<div class="cd-secondary-nav">
		<a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
		<nav>
			<ul>
				<li>
					<a href="#cd-placeholder-1">
						<b>Intro</b>
						<span><i class="fa fa-address-card-o fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-2">
						<b>Timeline</b>
						<span><i class="fa fa-history fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-3">
						<b>Experience</b>
						<span><i class="fa fa-code fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-4">
						<b>Stats</b>
						<span><i class="fa fa-bar-chart fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-5">
						<b>Contact</b>
						<span><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
			</ul>
		</nav>
	</div> <!-- .cd-secondary-nav -->

@endsection