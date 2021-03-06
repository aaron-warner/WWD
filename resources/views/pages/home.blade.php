@extends('main')

@section('title', 'Home')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

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
					<a href="#cd-placeholder-5">
						<b>Contact</b>
						<span><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></span><!-- icon -->
					</a>
				</li>
			</ul>
		</nav>
	</div> <!-- .cd-secondary-nav -->
	<main class="cd-main-content">
		<section id="cd-placeholder-1" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Intro</h2>
			</div>
			<img src="{{ asset('images/aaron.jpg') }}" width="200" height="200" class="img-responsive img-center img-circle" alt="Aaron Warner, Web Developer">
			<hr>
			<p class="text-center">
				My name is Aaron Warner. I am an experienced Web Developer based in the West Midlands with a demonstrated history of working with strong businesses and clients to attain a strong web presence. I studied towards a Bachelor of Engineering (BEng) focused in Computer Technology/Computer Systems Technology from the University of Birmingham before persuing my desire to become a well-established and respected web developer. 
			</p>
		</section> <!-- #cd-placeholder-1 -->

		<section id="cd-placeholder-2" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Timeline</h2>
			</div>
			<div class="timeline-container">
				<div class="timeline">

  					<div class="entry">
    					<div class="title">
							<h3>2017 - Present</h3>
							<p>Made in the Midlands</p>
    					</div>
    					<div class="body">
							<p>Web Developer</p>
							<ul>
								<li>Designing and creating websites for members</li>
								<li>Organising hosting, domain names and DNS records</li>
								<li>Creating and maintaining databses</li>
								<li>Offering technical advice to staff and users of company websites</li>
							</ul>
    					</div>
  					</div>

  					<div class="entry">
    					<div class="title">
							<h3>2016 - 2017</h3>
							<p>LearnPlay Foundation</p>
    					</div>
    					<div class="body">
							<p>Head of Web Department</p>
							<ul>
								<li>Designing and creating websites for clients</li>
								<li>Providing work to team members based on skills and experience</li>
								<li>Teaching new employees programming languages and development tools</li>
								<li>Organising hosting, domain names, and DNS records</li>
								<li>Creating and maintaining databses</li>
								<li>Handled and took action regarding safeguarding issues</li>
							</ul>
    					</div>
  					</div>

  					<div class="entry">
    					<div class="title">
							<h3>2015-2016</h3>
							<p>University of Birmingham</p>
    					</div>
    					<div class="body">
							<p>Computer Systems Engeering Bachelors Degree</p>
							<ul>
								<li>Completed one semester before persuing dream career within web development</li>
							</ul>
    					</div>
  					</div>

  					<div class="entry">
    					<div class="title">
							<h3>2013-2015</h3>
							<p>Halesowen College</p>
    					</div>
    					<div class="body">
							<p>A-Levels</p>
							<ul>
								<li>Mathematics</li>
								<li>Computer Science</li>
								<li>Statistics</li>
							</ul>
    					</div>
  					</div>

				</div>
			</div>
		</section> <!-- #cd-placeholder-2 -->

		<section id="cd-placeholder-3" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Experience</h2>
			</div>
			<p class="text-center">
				Throughout my years within web development I have built and contributed to a wide variety of different web applications, whether it had been a client of the company I worked for or even a personal referance who wanted to initialise their web presence using my services.
			</p>
			<p class="text-center">
				Developing these web applications has been a great experience for me, throughout common practises I have learnt and utilised skills in the following areas:
			</p>

			<hr>

			<div class="row">

				<div class="col-sm-6">
					<h2>Front-End</h2>
					<hr>
					<ul class="bulleted">
						<li><p>HTML</p></li>
						<li><p>CSS</p></li>
						<li><p>LESS/SASS</p></li>
						<li><p>JavaScript</p></li>
						<li><p>jQuery</p></li>
						<li><p>Angular.js</p></li>
						<li><p>Photoshop/Illustrator</p></li>
						<li><p>Blade Templating Engine</p></li>
					</ul>
				</div>

				<div class="col-sm-6">
					<h2>Back-End</h2>
					<hr>
					<ul class="bulleted">
						<li><p>PHP</p></li>
						<li><p>SQL</p></li>
						<li><p>Laravel</p></li>
						<li><p>Linux</p></li>
						<li><p>Apache</p></li>
						<li><p>NGINX</p></li>
						<li><p>JavaScript</p></li>
						<li><p>GIT</p></li>
					</ul>
				</div>

			</div>

			<hr>

			<h2 class="text-center">
				Keen to see some of my work?
			</h2>
			<div class="text-center">
				<a href="/portfolio" class="btn btn-primary"><p>View My Portfolio</p></a>
			</div>

		</section> <!-- #cd-placeholder-3 -->

		<section id="cd-placeholder-5" class="cd-section cd-container">
			<div class="home-section-heading">
				<h2>Contact Me</h2>
			</div>

			<p class="text-center">
				I'd love to hear from you
			</p>

			<hr>

			<form action="contact-submit" method="GET" data-parsley-validate=''>
		        <div class="row margin-bottom">
		            <div class="col-md-6">

		                <div class="form-group">
		                    <label for="name">
		                        Name</label>
		                    <input type="text" name="name" class="form-control required" id="name" placeholder="Enter name" required="required" />
		                </div>

		                <div class="form-group">
		                    <label for="email">
		                        Email Address</label>
		                    <div class="input-group">
		                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
		                        </span>
		                        <input type="email" name="email" class="form-control required" id="email" placeholder="Enter email" required="required" /></div>
		                </div>

		                <div class="form-group">
		                    <label for="subject">
		                        Subject</label>
		                    <input type="text" name="subject" class="form-control required" id="subject" placeholder="Enter subject" required="required" />
		                </div>

		            </div>

		            <div class="col-md-6">

		                <div class="form-group">
		                    <label for="message">
		                        Message</label>
		                    <textarea name="message" id="message" class="form-control required" rows="9" cols="25" required="required"
		                        placeholder="Message"></textarea>
		                </div>

		            </div>

		            <div class="col-md-12">

		                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
		                    Send Message</button>

		            </div>
		        </div>
	        </form>
		</section> <!-- #cd-placeholder-5 -->
	</main> <!-- .cd-main-content -->

@endsection

@section('scripts')

{!! Html::script('js/parsley.min.js') !!}

@endsection