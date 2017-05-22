@extends('main')

@section('title', 'Portfolio')

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
						<b>MIM</b>
						<span><i class="fa fa-address-card-o fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-2">
						<b>LearnPlay</b>
						<span><i class="fa fa-history fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
				<li>
					<a href="#cd-placeholder-3">
						<b>Personal</b>
						<span><i class="fa fa-code fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
			</ul>
		</nav>
	</div> <!-- .cd-secondary-nav -->

	<main class="cd-main-content">

		<section id="cd-placeholder-1" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Made in the Midlands</h2>
			</div>
			<div class="row">

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>Made in the Midlands</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>Manufacturing Advisory Service</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>RAPRA</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

			</div>
		</section> <!-- #cd-placeholder-1 -->

		<section id="cd-placeholder-2" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>LearnPlay Foundation</h2>
			</div>
			<div class="row">

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>LearnPlay Foundation</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>BC TalentMatch</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>Digital Road Safety</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

			</div>
		</section> <!-- #cd-placeholder-2 -->

		<section id="cd-placeholder-3" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Personal Clients</h2>
			</div>
			<div class="row">

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>JJ Dance</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>Focus-Lets</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

				<div class="col-md-4 col-sm-6 text-center">
					<figure class="portfolio-entry">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample108.jpg" alt="sample108" />
						<figcaption>
							<h3>Other</h3>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>

			</div>
		</section> <!-- #cd-placeholder-3 -->

	</main>

@endsection